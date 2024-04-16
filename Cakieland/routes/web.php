<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('homepage');
});

Route::get('/product-list', function() {
    return view('pages/productList');
});

Route::get('/product-detail', function() {
    return view('pages/productDetail');
});

Route::get('/account', function() {
    return view('pages/account');
});

Route::get('/cart', function() {
    return view('pages/cart');
});

Route::get('/checkout', function() {
    return view('pages/checkout');
});

Route::get('/error-page', function() {
    return view('pages/errorPage');
});

Route::get('/signup', function() {
    return view('pages/signup');
});

Route::get('/login', function() {
    return view('pages/login');
});

Route::get('/about-us', function() {
    return view('pages/aboutUs');
});