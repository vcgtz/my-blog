<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        return inertia('Dashboard/Categories/Index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return inertia('Dashboard/Categories/Create');
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

        return Redirect::route('dashboard.categories.index');
    }

    public function edit(Category $category)
    {
        return inertia('Dashboard/Categories/Edit', [
            'category' => $category
        ]);
    }

    public function update(StoreCategoryRequest $request, Category $category)
    {
        $validated = $request->validated();
        $category->update($validated);

        return Redirect::route('dashboard.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return Redirect::route('dashboard.categories.index');
    }
}
