<?php

namespace App\Http\Livewire\Manager\Incidents;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.manager.incidents.index')->layout("layouts.app.base");
    }
}
