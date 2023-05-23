<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Teste extends Component
{
    public $search;
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.teste');
    }
}
