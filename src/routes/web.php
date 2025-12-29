<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->name('home');
});

Route::get('/health', function () {
    return response()->json(['status' => 'OK'], 200);
})->name('health');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');