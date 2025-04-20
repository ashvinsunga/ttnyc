<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    return view('home', ['products' => $products]);
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

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact_us', function () {
    return view('contact');
})->name('contact_us');
