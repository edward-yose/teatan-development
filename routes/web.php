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

Route::get('/', function () {
    return view('layout');
});
Route::get('/aboutus', function () {
    return view('about');
});
Route::get('/menu', [\App\Http\Controllers\MenuController::class,'get'])->name('show-menu');
Route::get('/home', [\App\Http\Controllers\HomeController::class,'get'])->name('show-home');

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});