<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return redirect()->route('page.login');
})->name('login');

// User routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/my/profile', function () {
        return view('profile');
    })->name('my.profile');

});

// Admin routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

});

// Login/Register pages
Route::group(['prefix'=> 'page'], function () {
    Route::get('/register', [AuthController::class, 'getregister'])->name('page.register');
    Route::get('/login', [AuthController::class, 'getlogin'])->name('page.login');
});
