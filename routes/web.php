<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'main');
Route::view('/products', 'products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
