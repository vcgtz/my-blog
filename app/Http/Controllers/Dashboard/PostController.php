<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostStatus;
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
        $categories = Category::where('status', Category::$ACTIVE)->get();
        $statuses = PostStatus::all();

        return inertia('Dashboard/Posts/Create', [
            'categories' => $categories,
            'statuses' => $statuses
        ]);
    }

    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        $post = Post::onlyTrashed()->where('slug', $validated['slug'])->first();

        if ($post) {
            $post->restore();
            $post->update($validated);
        } else {
            Post::create($validated);
        }

        return Redirect::route('dashboard.posts.index');
    }

    public function edit(Post $post)
    {
        $categories = Category::where('status', Category::$ACTIVE)->get();
        $statuses = PostStatus::all();

        return inertia('Dashboard/Posts/Edit', [
            'post' => $post,
            'categories' => $categories,
            'statuses' => $statuses
        ]);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $validated = $request->validated();
        $post->update($validated);

        return Redirect::route('dashboard.posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return Redirect::route('dashboard.posts.index');
    }
}
