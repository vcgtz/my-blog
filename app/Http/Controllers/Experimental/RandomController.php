<?php

namespace App\Http\Controllers\Experimental;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RandomController extends Controller
{
    public function index()
    {
        return Inertia::render('Experimental/Random', [
            'randomNum' => rand(0, 100)
        ]);
    }
}
