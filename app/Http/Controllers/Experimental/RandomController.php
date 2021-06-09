<?php

namespace App\Http\Controllers\Experimental;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RandomController extends Controller
{
    public function index()
    {
        return Inertia::render('Experimental/Random', [
            'randomNum' => rand(0, 100)
        ]);
    }

    public function user()
    {
        return view('experimental.user', [
            'user' => Auth::user()
        ]);
    }
}
