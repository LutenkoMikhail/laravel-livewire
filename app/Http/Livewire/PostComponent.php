<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;

    public $title;
    public $description;
    public $selectedId;
    public $updateMode = false;

    private function resetInputForm()
    {
        $this->title = null;
        $this->description = null;
    }

    public function render()
    {
        $posts = Post::latest()->paginate(3);
        return view('livewire.posts.component',
            ['posts' => $posts]);
    }


    public function store()
    {
        $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
        ]);
        Post::create([
            'title' => $this->title,
            'description' => $this->description
        ]);
        $this->resetInputForm();
    }

    public function edit($idPost)
    {
        $post = Post::findorFail($idPost);
        $this->selectedId = $idPost;
        $this->title = $post->title;
        $this->description = $post->description;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'selectedId' => 'required|numeric'
        ]);
        if ($this->selectedId) {
            $post = Post::find($this->selectedId);
            $post->update([
                'title' => $this->title,
                'description' => $this->description
            ]);
        }
        $this->resetInputForm();
        $this->updateMode = false;
    }

    public function destroy($idPost)
    {
        if ($idPost) {
            $post = Post::where('id', $idPost);
            $post->delete();
        }
    }

}
















