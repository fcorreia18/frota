<?php

namespace App\Http\Livewire\Manager\Maintenances;

use Livewire\Component;

class Index extends Component
{

   
    public function render()
    {
        return view('livewire.manager.maintenances.index')->layout("layouts.app.base");
    }
}
