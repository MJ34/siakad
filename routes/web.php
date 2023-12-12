<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.auth-login');
})->name('login');

Route::get('/register', function () {
    return view('pages.auth.auth-register');
})->name('register');

Route::get('/forgotpwd', function () {
    return view('pages.auth.auth-forgot-password');
})->name('forgotpwd');

Route::get('/resetpwd', function () {
    return view('pages.auth.auth-reset-password');
})->name('resetpwd');

Route::get('/home', function () {
    return view('pages.blank-page');
})->name('home');