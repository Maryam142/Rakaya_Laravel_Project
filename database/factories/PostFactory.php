<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory{
    /**
     * Define the model's default state.
     * @var string
     */ 
    protected $model =Post::class;
    /**
     * Define the model's default state.
     * @return array
     */
    public function definition(){
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'slug' =>$this->faker->slug(),
            'price'=>$this->faker->numberBetween(100, 1000),
            'excerpt' => $this->faker->sentence(2),
            'body' =>$this->faker->paragraph(6)        
        ];
    }
}
