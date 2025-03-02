<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('UsersPage', [
        'message' => 'hello',
        'user' => [
            'name' => 'John Doe',
        ]
    ]);
});
