<?php

namespace App\Http\Livewire;

use App\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PostList extends Component
{
    public string $filter = '';

    public function render()
    {
        if (! empty($this->filter)) {
            return view('livewire.post-list', [
                'posts' => Post::ofAuthor($this->filter)->get()
            ]);
        }

        return view('livewire.post-list', [
            'posts' => Post::all()
        ]);
    }
}
