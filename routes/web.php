<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/store', function () {
    return view('store');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/form', function () {
    return view('form');
});