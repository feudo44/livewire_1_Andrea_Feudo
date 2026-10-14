<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public string $search = '';

    public function render()
    {
        $posts = Post::query()
            ->where('title', 'like', '%' . $this->search . '%')
            ->orWhere('body', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.post-list', compact('posts'));
    }
}