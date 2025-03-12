<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function index()
    {
        return Inertia::render('RolesPage', [

        ]);
    }
}
