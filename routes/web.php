<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/single_product', function () {
    return view('single_product');
})->name('single_product');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/login', function () {
    return view('login');
})->name('login');
