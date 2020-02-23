<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/products');

Route::get('/products', 'ProductController@index');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/add/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart/update/{id}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/destory/{id}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');

Route::resource('/orders', 'OrderController')->middleware('auth');

Route::get('/paypal/checkout', 'PaypalController@getExpressCheckout')->name('paypal.checkout');
Route::get('/paypal/checkout-success', 'PaypalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('/paypal/checkout-cancel', 'PaypalController@getPaypalCancelPage')->name('paypal.cancel');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
