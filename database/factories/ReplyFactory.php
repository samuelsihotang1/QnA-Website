<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  protected $model = Reply::class;

  public function definition(): array
  {
    return [
      'user_id' => User::factory(),
      'comment_id' => Comment::factory(),
      'body' => fake()->sentence(),
    ];
  }
}
