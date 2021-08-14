<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('front.pages.cart', compact('cartItems'));
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
}
