<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'PHP', 'description' => 'Tips, tutorials, tips and more using vanilla PHP']);
        Category::create(['name' => 'JAVASCRIPT', 'description' => 'Tips, tutorials, tips and more using vanilla Javascript']);
    }
}
