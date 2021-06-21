<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        $category = Category::onlyTrashed()->where('name', $validated['name'])->first();

        if ($category) {
            $category->restore();
            $category->update($validated);
        } else {
            Category::create($validated);
        }

        return Redirect::route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return inertia('Admin/Categories/Edit', [
            'category' => $category
        ]);
    }
}
