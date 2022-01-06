<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Users extends Component
{
    public $users;

    // fetch users from api.
    public function mount()
    {
        $response = Http::accept('application/json')->get('https://api.github.com/users');
        $this->users = $response->json();
    }
    public function render()
    {
        return view('livewire.users');
    }
}
