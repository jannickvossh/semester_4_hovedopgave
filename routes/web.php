<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Register users
Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('user.register');
    Route::put('/store', [UserController::class, 'store'])->name('user.store');
});

// User sessions
Route::prefix('session')->group(function () {
    Route::get('/login', [SessionController::class, 'login'])->name('session.login');
    Route::post('/authenticate', [SessionController::class, 'authenticate'])->name('session.authenticate');
    Route::post('/logout', [SessionController::class, 'logout'])->name('session.logout');
});
