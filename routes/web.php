<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('index');
})->name('index');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/shop', function() {
    return view('shop');
})->name('shop');

Route::get('/shop-detail', function() {
    return view('shop-detail');
})->name('shop-detail');

Route::get('/cart', function() {
    return view('cart');
})->name('cart');

Route::get('/checkout', function() {
    return view('checkout');
})->name('checkout');

Route::get('/my-account', function() {
    return view('my-account');
})->name('my-account');

Route::get('/wishlist', function() {
    return view('wishlist');
})->name('wishlist');

Route::get('/gallery', function() {
    return view('gallery');
})->name('gallery');

Route::get('/contact-us', function() {
    return view('contact-us');
})->name('contact-us');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
