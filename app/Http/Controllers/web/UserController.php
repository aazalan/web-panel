<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Resources\web\UserResource;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->paginate(2);
        return Inertia::render('UsersPage', [
            'users' => UserResource::collection($users),
        ]);
    }
}
