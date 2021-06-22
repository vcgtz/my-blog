<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        $offTopicCategory = Category::create(['name' => 'OFF-TOPIC', 'description' => 'Topics that are not directly about programming']);
        $helloTag = Tag::create(['name' => 'hello', 'description' => 'A tag to say hello']);
        $vcgtzTag = Tag::create(['name' => 'vcgtz', 'description' => 'A tag about me']);

        $post = Post::create([
            'title' => 'Hello World!',
            'slug' => 'hello-world',
            'content' => 'Hello World!',
            'category_id' => $offTopicCategory->id
        ]);

        $post->tags()->save($helloTag);
        $post->tags()->save($vcgtzTag);
    }
}
