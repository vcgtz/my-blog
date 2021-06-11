<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return inertia('Admin/Posts/Index');
    }

    public function create()
    {
        return inertia('Admin/Posts/Create');
    }

    public function edit($post)
    {
        return inertia('Admin/Posts/Edit');
    }
}
