<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $posts;
    public $search;
    public function render()
    {


            if ($this->search=="") {
                $this->posts= Post::all();

            } else {
                $this->posts= Post::where('title', 'LIKE', "%".$this->search.'%')->orWhere('author', 'LIKE', "%".$this->search.'%')->orderBy('title','ASC')->get();
            }
            return view('livewire.search-posts');

    }
}