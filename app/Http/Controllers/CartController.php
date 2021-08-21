<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
class CartController extends Controller
{

    public function index()
    {
        return view('front.pages.cart');
    }

    public function add(Product $product)
    {
        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect(route('cart.index'));
    }

    public function update($rowId)
    {
        $cartItems = \Cart::session(auth()->id())->update($rowId, [
            'quantity' => [
                'relative' => false,
                'value' => request('quantity')
            ]
        ]);
        return back();
    }

    public function destroy($itemId)
    {
        $cartItems = \Cart::session(auth()->id())->remove($itemId);
        return back();
    }

    public function applyCoupon()
    {
        $couponCode = request('coupon_code');
        $coupon = Coupon::where(['code' => $couponCode, 'is_active' => 1])->first();

        if(!$coupon) {
            return back()->withMessage('Sorry, Invalid Coupon');
        }

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $coupon->name,
            'type' => $coupon->type,
            // 'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'target' => 'total',
            'value' => $coupon->value,
        ));

        \Cart::condition($condition);
        \Cart::session(auth()->user()->id)->condition($condition);

        return back()->withMessage('Congrats, Coupon Applied');
    }

    // Temp. Fix with named route issues with latest Laravel versins
    // https://chrislloyd.co/fixing-laravel-php-8-error-unknown-named-parameter-error/
    public function callAction($method, $parameters)
    {
        return parent::callAction($method, array_values($parameters));
    }
}
