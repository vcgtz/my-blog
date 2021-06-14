<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return inertia('Admin/Tags/Index');
    }

    public function create()
    {
        return inertia('Admin/Tags/Create');
    }

    public function edit($tag)
    {
        return inertia('Admin/Tags/Edit');
    }
}
