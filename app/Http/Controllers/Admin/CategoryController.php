<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return inertia('Admin/Categories/Index', [
            'categories' => Category::all()
        ]);
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
