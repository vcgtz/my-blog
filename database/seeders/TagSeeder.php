<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'php', 'description' => 'Posts related to PHP in a general way']);
        Tag::create(['name' => 'laravel', 'description' => 'Posts related to Laravel in a general way']);
        Tag::create(['name' => 'javascript', 'description' => 'Posts related to Javascript in a general way']);
        Tag::create(['name' => 'nodejs', 'description' => 'Posts related to NodeJS in a general way']);
        Tag::create(['name' => 'vuejs', 'description' => 'Posts related to VueJS in a general way']);
    }
}
