<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class PostCreate extends Component
{
  public $question;

  public function render()
  {
    return view('livewire.post-create');
  }

  public function store()
  {
    $this->validate([
      'question' => 'required|string|min:10',
    ]);

    Post::factory()->create([
      'title' => $this->question,
      'user_id' => auth()->user()->id,
    ]);

    $this->question = NULL;

    $this->emit('postStore');
  }
}
