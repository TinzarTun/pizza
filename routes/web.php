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
    Route::get('/my/profile', function () {
        return view('profile');
    })->name('my.profile');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('page/register', [AuthController::class, 'getregister'])->name('page.register');
Route::get('page/login', [AuthController::class, 'getlogin'])->name('page.login');
