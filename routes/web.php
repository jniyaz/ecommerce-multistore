<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
