<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'main');
Route::view('/products', 'products');
Route::view('/product', 'product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
