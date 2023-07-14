<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */  
class PostFactory extends Factory
{
  /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

  public function definition(): array
  {
    return [
      'user_id' => User::factory(),
      'category_id' => Category::factory(),
      'title' => fake()->sentence(),
      'slug' => fake()->slug(),
      'thumbnail' => 'images/default.jpg',
      'body' => fake()->paragraphs(10, true),
    ];
  }
}