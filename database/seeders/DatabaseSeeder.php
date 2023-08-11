<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        // Category::truncate();
        // Post::truncate();
        // User::truncate();

        Category::factory()->create([
            'name'=> 'Planners'
        ]);
        Category::factory()->create([
            'name'=> 'books'
        ]);
        Category::factory()->create([
            'name'=> 'stikcers'
        ]);
                Post::factory(10)->create();


    }
}
