<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class PostCreate extends Component
{
  public $title;

  public function render()
  {
    return view('livewire.post-create');
  }

  public function store()
  {
    $this->validate([
      'title' => 'required|string|min:10',
    ]);

    Post::factory()->create([
      'title' => $this->title,
      'user_id' => auth()->user()->id,
    ]);

    $this->title = NULL;

    $this->emit('postStore');
  }
}
