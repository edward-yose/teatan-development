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


Route::get('/', [\App\Http\Controllers\MenuController::class,'get'])->name('show-menu');
Route::get('/aboutus', function () {
    return view('about');
});
Route::get('/menu', [\App\Http\Controllers\MenuController::class,'get'])->name('show-menu');
Route::get('/home', [\App\Http\Controllers\HomeController::class,'get'])->name('show-home');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('create-user');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/pay', function () {
    return view('qris');
});
