<?php

/*** Web Routes */

// Home
Route::get('/', 'HomePageController@index')->name('home.index');

// Search
Route::get('/products/search', 'ProductController@search')->name('search.products');

// Products
Route::resource('/products', 'ProductController');

// Cart
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/cart/add/{product}', 'CartController@add')->name('cart.add');
    Route::get('/cart/update/{id}', 'CartController@update')->name('cart.update');
    Route::get('/cart/destory/{id}', 'CartController@destroy')->name('cart.destroy');
    Route::get('/cart/coupon', 'CartController@applyCoupon')->name('cart.coupon');
});

// Checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::get('/paypal/checkout/{order}', 'PaypalController@getExpressCheckout')->name('paypal.checkout');
Route::get('/paypal/checkout-success/{order}', 'PaypalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('/paypal/checkout-cancel', 'PaypalController@getPaypalCancelPage')->name('paypal.cancel');

// orders
Route::resource('/orders', 'OrderController')->middleware('auth');

// shops
Route::resource('/shops', 'ShopController')->middleware('auth');

// Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Voyager - Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
