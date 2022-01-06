<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    // Function that increments the count
    public function increment()
    {
        $this->count++;
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
