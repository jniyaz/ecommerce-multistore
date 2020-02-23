<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function getExpressCheckout()
    {
        $checkoutData = $this->checkoutData();

        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);
    }

    public function getExpressCheckoutSuccess(Request $request)
    {
        $token = $request->get('token');
        $payerId = $request->get('PayerID');

        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            // perform transaaction to paypal
            $payment_status = $provider->doExpressCheckoutPayment($this->checkoutData(), $token, $payerId);
        }

        dd('Payment successful');
    }

    public function getPaypalCancelPage()
    {
        dd('Papal cancel');
    }

    private function checkoutData()
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
            'return_url' => route('paypal.success'),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid('INV-'),
            'invoice_description' => ' Order Description ',
            'total' => $cart->getTotal()
        ];
    }
}
