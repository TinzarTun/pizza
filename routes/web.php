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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/register', [AuthController::class, 'getregister'])->name('register');
Route::get('/login', [AuthController::class, 'getlogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [AuthController::class,'postregister'])->name('register.post');
Route::post('/login', [AuthController::class,'postlogin'])->name('login.post');
