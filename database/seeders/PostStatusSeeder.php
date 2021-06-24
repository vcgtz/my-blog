<?php

namespace Database\Seeders;

use App\Models\PostStatus;
use Illuminate\Database\Seeder;

class PostStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostStatus::create(['name' => 'PUBLISHED', 'description' => 'Post published']);
        PostStatus::create(['name' => 'UNPUBLISHED', 'description' => 'Posts that were unpublished']);
        PostStatus::create(['name' => 'READY TO PUBLISH', 'description' => 'Post that are ready to be published']);
    }
}
