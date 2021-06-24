<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostStatus;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create(['name' => 'OFF-TOPIC', 'description' => 'Other things I like to write about']);
        $tag = Tag::create(['name' => 'me', 'description' => 'Posts directly related to me']);
        $status = PostStatus::create(['name' => 'IN PROGRESS', 'description' => 'Posts that are in progress']);

        $post = Post::create([
            'title' => 'Hello World!',
            'slug' => 'hello-world',
            'content' => 'Hello World!',
            'status_id' => $status->id,
            'category_id' => $category->id
        ]);

        $post->tags()->save($tag);
    }
}
