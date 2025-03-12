<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class InfoController extends Controller
{
    public function index()
    {
        return Inertia::render('InfoPage', [

        ]);
    }
}
