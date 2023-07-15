<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Reply;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    for ($i = 0; $i < 10; $i++) {
      $user = User::factory()->create();
      for ($j = 0; $j < 3; $j++) {
        Post::factory()->create([
          'user_id' => $user->id,
        ]);
      }
    }
  }
}
