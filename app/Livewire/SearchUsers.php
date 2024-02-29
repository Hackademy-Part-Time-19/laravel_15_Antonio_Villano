<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $users;
    public $search;
    public function render()
    {
        if ($this->search=="") {
            $this->users= User::all();

        } else {
            $this->users= User::where('name', 'LIKE', "%".$this->search.'%')->orWhere('email', 'LIKE', "%".$this->search.'%')->orderBy('name','ASC')->get();
        }
        return view('livewire.search-users');
    }
}
