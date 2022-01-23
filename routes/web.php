<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/', WelcomeController::class);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::post('/users', [UserController::class, 'post']);

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });

    Route::post('/logout', [LoginController::class, 'destroy']);
});
