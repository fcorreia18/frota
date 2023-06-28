<?php

namespace App\Http\Livewire\Manager\Projects;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.manager.projects.index')->layout("layouts.app.base");
    }
}
