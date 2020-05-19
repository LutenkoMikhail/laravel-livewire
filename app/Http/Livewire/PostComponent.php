<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $posts;
    public $title;
    public $description;
    public $selectedId;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts.component');
    }
}
