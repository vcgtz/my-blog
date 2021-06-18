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
        Tag::create($validated);

        return Redirect::route('admin.tags.index');
    }

    public function edit(Tag $tag)
    {
        return inertia('Admin/Tags/Edit', [
            'tag' => $tag
        ]);
    }

    public function update(StoreTagRequest $request, Tag $tag)
    {
        $validated = $request->validated();
        $tag->update($validated);

        return Redirect::route('admin.tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return Redirect::route('admin.tags.index');
    }
}
