<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TagController extends Controller
{
    public function index()
    {
        return inertia('Admin/Tags/Index', [
            'tags' => Tag::all()
        ]);
    }

    public function create()
    {
        return inertia('Admin/Tags/Create');
    }

    public function store(StoreTagRequest $request)
    {
        $validated = $request->validated();
        $tag = Tag::create($validated);

        return Redirect::route('admin.tags.index');
    }

    public function edit($tag)
    {
        return inertia('Admin/Tags/Edit');
    }
}
