<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
