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

        Category::truncate();
        Post::truncate();
        User::truncate();

        Post::factory()->create();

    //    $c1= Category::create([
    //         'name'=> 'Category1',
    //         'slug'=> 'category1'
    //     ]);
    //     $c2=  Category::create([
    //         'name'=> 'Category2',
    //         'slug'=> 'category2'
    //     ]);        
    //     $c3= Category::create([
    //         'name'=> 'Category3',
    //         'slug'=> 'category3'
    //     ]);
 

    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $c1->id,
    //         'title' => 'First product',
    //         'slug' =>'product1',
    //         'excerpt' => 'product1 excerpt',
    //         'body' =>'product1 body'
    //     ]);

    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $c2->id,
    //         'title' => 'Second product',
    //         'slug' =>'product2',
    //         'excerpt' => 'product1 excerpt',
    //         'body' =>'product1 body'
    //     ]);
    }
}
