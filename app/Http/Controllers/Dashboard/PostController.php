<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PostController extends Controller
{
    public function __construct()
    {
        Inertia::share('tinymceApiKey', env('TINYMCE_API_KEY'));
    }

    public function index()
    {
        return inertia('Dashboard/Posts/Index', [
            'posts' => Post::with(['category', 'tags'])->get()
        ]);
    }

    public function create()
    {
        return inertia('Dashboard/Posts/Create');
    }

    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        $post = Post::onlyTrashed()->where('slug', $validated['slug'])->first();

        if ($post) {
            $post->restore();
            $post->update($validated);
        } else {
            $validated['category_id'] = 1; // ToDo Remove this when the category appears in the form

            Post::create($validated);
        }

        return Redirect::route('dashboard.posts.index');
    }

    public function edit(Post $post)
    {
        return inertia('Dashboard/Posts/Edit', [
            'post' => $post
        ]);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $validated = $request->validated();
        $post->update($validated);

        return Redirect::route('dashboard.posts.index');
    }
}
