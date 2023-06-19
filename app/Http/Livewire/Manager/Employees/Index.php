<?php

namespace App\Http\Livewire\Manager\Employees;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.manager.employees.index')->layout("layouts.app.base");
    }
}
