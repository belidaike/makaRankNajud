<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AuthorIndex extends Component
{
    // public $user;
    public $search;

    public function show()
    {
        $user = User::all();
        return view('livewire.author-index', compact('user'));
    }
    
    public function render()
    {
        return view('livewire.author-index');
    }
}
