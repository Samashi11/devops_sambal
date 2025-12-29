<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->name('home');
});

// Route::get('/health', fn() => response()->json(['status' => 'ok']));

Route::get('/about', fn() => view('about'))->name('about');
Route::get('/products', fn() => view('products'))->name('products');
Route::get('/contact', fn() => view('contact'))->name('contact');