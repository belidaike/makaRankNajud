<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('livewire.author-index', compact('users'));
    }
}
