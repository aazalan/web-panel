<?php

use App\Http\Controllers\web\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    Route::get('/', function () {
        return Inertia::render('UsersPage', [
            'message' => 'hello',
            'user' => [
                'name' => 'John Doe',
            ]
        ]);
    });
});

Route::get('login', [AuthController::class, 'view'])->name('auth.view');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
