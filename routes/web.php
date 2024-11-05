<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/header', function () {
    return view('layout.header');
});

Route::get('/index', function () {
    return view('layout.index')->name('index');
});

// Routes for User Registeration

Route::get('/register', [AuthController::class, 'showregisterationform'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Routes for User login
Route::get('/login', [AuthController::class, 'showloginform'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::middleware(['auth'])->group(function () {
// Route for logout the user
Route::get('logout', function(){
    return view('layout.index');
})->name('logout');

// Route for admin dashboard

Route::get('/admin', [ImageController::class, 'index'])->name('admin.dashboard');
Route::post('/admin', [ImageController::class, 'store']);
});

//
Route::get('/index', function(){
    return view('layout.index');
})->name('index');
