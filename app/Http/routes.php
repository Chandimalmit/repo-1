<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('shop.index');
});

Route::get('contact', function () {
    return view('shop.contact');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('checkout', function () {
    return view('shop.checkout');
});

Route::get('products', function () {
    return view('shop.products');
});

Route::auth();

Route::get('/home', 'HomeController@index');
