<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TagController extends Controller
{
    public function index()
    {
        return inertia('Dashboard/Tags/Index', [
            'tags' => Tag::all()
        ]);
    }

    public function create()
    {
        return inertia('Dashboard/Tags/Create');
    }

    public function store(StoreTagRequest $request)
    {
        $validated = $request->validated();
        $tag = Tag::onlyTrashed()->where('name', $validated['name'])->first();

        if ($tag) {
            $tag->restore();
            $tag->update($validated);
        } else {
            Tag::create($validated);
        }

        return Redirect::route('dashboard.tags.index');
    }

    public function edit(Tag $tag)
    {
        return inertia('Dashboard/Tags/Edit', [
            'tag' => $tag
        ]);
    }

    public function update(StoreTagRequest $request, Tag $tag)
    {
        $validated = $request->validated();
        $tag->update($validated);

        return Redirect::route('dashboard.tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return Redirect::route('dashboard.tags.index');
    }
}
