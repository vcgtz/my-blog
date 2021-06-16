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
        Tag::create(['name' => 'php', 'description' => 'Programming language']);
        Tag::create(['name' => 'laravel', 'description' => 'PHP framework']);
        Tag::create(['name' => 'javascript', 'description' => 'Programming language']);
        Tag::create(['name' => 'vuejs', 'description' => 'Javascript framework']);
        Tag::create(['name' => 'reactjs', 'description' => 'Javascript framework']);
    }
}
