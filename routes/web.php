<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'main');
Route::view('/products', 'products');
Route::view('/product', 'product');
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
