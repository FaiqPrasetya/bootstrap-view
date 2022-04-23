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

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/contact-us', 'contact-us')->name('contact-us');

// Route::get('/', function() {
//     return view('index');
// })->name('index');

// Route::get('/about', function() {
//     return view('about');
// })->name('about');

// Route::get('/gallery', function() {
//     return view('gallery');
// })->name('gallery');

// Route::get('/contact-us', function() {
//     return view('contact-us');
// })->name('contact-us');

Auth::routes();

