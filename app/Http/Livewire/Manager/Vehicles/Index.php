<?php

namespace App\Http\Livewire\Manager\Vehicles;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.manager.vehicles.index')->layout("layouts.app.base");
    }
}
