<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function __construct()
    {
        Inertia::share('tinymceApiKey', env('TINYMCE_API_KEY'));
    }

    public function index()
    {
        return inertia('Admin/Posts/Index', [
            'posts' => Post::with(['category', 'tags'])->get()
        ]);
    }

    public function create()
    {
        return inertia('Admin/Posts/Create');
    }

    public function edit($post)
    {
        return inertia('Admin/Posts/Edit');
    }
}
