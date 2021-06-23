<?php

namespace App\Http\Controllers\Dashboard;

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
        return inertia('Dashboard/Posts/Index', [
            'posts' => Post::with(['category', 'tags'])->get()
        ]);
    }

    public function create()
    {
        return inertia('Dashboard/Posts/Create');
    }

    public function edit($post)
    {
        return inertia('Dashboard/Posts/Edit');
    }
}
