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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
