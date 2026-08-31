<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home ');
});

Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product', function () {
    return view('product');
})->name('product');