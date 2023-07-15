<?php

namespace Database\Factories;
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
    $title = fake()->sentence();
    $slug = preg_replace('/[^a-z-]/', '', strtolower(implode('-', array_slice(explode(' ', $title), 0, 3))));

    return [
      'user_id' => User::factory(),
      'title' => $title,
      'slug' => $slug,
    ];
  }
}
