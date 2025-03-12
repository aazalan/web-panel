<?php

use App\Http\Controllers\web\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\web\InfoController::class, 'index'])->name('info');
    Route::get('/users', [\App\Http\Controllers\web\UserController::class, 'index'])->name('users');
});

Route::get('login', [AuthController::class, 'view'])->name('auth.view');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
