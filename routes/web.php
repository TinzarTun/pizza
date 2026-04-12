<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('/registerPage', [AuthController::class, 'getregister'])->name('registerPage');
Route::get('/loginPage', [AuthController::class, 'getlogin'])->name('loginPage');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::post('/register', [AuthController::class,'postregister'])->name('register.post');
// Route::post('/login', [AuthController::class,'postlogin'])->name('login.post');
