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
    //return view('welcome');
    return view('pages.auth.auth-login');
});

/* Route::middleware(['auth'])->group(function () {
    Route::get('home', function(){
        return view('pages.app.dashboard-siakad', ['type_menu' => '']);
    })->name('home');
    Route::resource('user', UserController::class);
}); */