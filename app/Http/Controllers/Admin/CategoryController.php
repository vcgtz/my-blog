<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return inertia('Admin/Categories/Index');
    }

    public function create()
    {
        return inertia('Admin/Categories/Create');
    }

    public function edit($category)
    {
        return inertia('Admin/Categories/Edit');
    }
}
