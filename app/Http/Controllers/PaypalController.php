<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderPaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);

        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);
    }

    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {
        $token = $request->get('token');
        $payerId = $request->get('PayerID');

        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            // perform transaaction to paypal
            $payment_status = $provider->doExpressCheckoutPayment($this->checkoutData($orderId), $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if (in_array($status, ['Completed', 'Processed'])) {
                // update order
                $order = Order::find($orderId);
                $order->is_paid = true;
                $order->status = 'processing';
                $order->save();

                // clear the cart
                \Cart::session(auth()->id())->clear();

                // Send an email
                Mail::to($order->user->email)->send(new OrderPaid($order));

                // redirect
                return redirect()->route('products.home')->withMessage('Payment successfull');
            }
        }

        return redirect()->route('products.home')->withMessage('Payment unsuccessfull, something went wrong');
    }

    public function getPaypalCancelPage()
    {
        return redirect()->route('products.home')->withMessage('Payment not processed. Something went wrong');
    }

    private function checkoutData($orderId = "")
    {
        $cart = \Cart::session(auth()->id());

        $cartItems = array_map(function ($item) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity'],
            ];
        }, $cart->getContent()->toArray());

        return [
            'items' => $cartItems,
            'return_url' => route('paypal.success', $orderId),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid('INV-'),
            'invoice_description' => ' Order Description ',
            'total' => $cart->getTotal()
        ];
    }
}
