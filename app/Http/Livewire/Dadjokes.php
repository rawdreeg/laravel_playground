<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;


use Livewire\Component;

class Dadjokes extends Component
{
    public $joke = "Loadings...";

    // Mounting
    public function mount()
    {
        $this->getJoke();
    }

    // get joke from API using http client and set joke variable.
    public function getJoke()
    {
        // get query string from url.
        $response = Http::accept('application/json')->get('https://icanhazdadjoke.com/');
        $this->joke = $response->json()['joke'];
    }

    public function render()
    {
        return view('livewire.dadjokes');
    }
}
