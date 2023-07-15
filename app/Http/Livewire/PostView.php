<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post;

class PostView extends Component
{
  protected $listeners = ['postStore' => 'render'];

  public function render()
  {
    return view('livewire.post-view', [
      'posts' => Post::orderBy('created_at', 'desc')->get()
    ]);
  }

  public function deletePost($postId)
  {
    $post = Post::find($postId);
    $post->delete();
  }
}
