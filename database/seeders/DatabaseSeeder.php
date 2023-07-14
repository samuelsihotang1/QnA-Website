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
    $username = 'samuel';
    User::factory()->create(
      [
        'username' => $username,
        'user_type' => 'admin',
        'password' => bcrypt($username)
      ]
    );

    for ($i = 0; $i < 10; $i++) {
      $user = User::factory()->create();
      $category = Category::factory()->create();

      $post = Post::factory()->create([
        'user_id' => $user->id,
        'category_id' => $category->id
      ]);

      $comment = Comment::factory()->create([
        'user_id' => $user->id,
        'post_id' => $post->id
      ]);

      Reply::factory()->create([
        'user_id' => $user->id,
        'comment_id' => $comment->id
      ]);
    }
  }
}
