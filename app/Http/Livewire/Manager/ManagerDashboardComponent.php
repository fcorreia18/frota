<?php

namespace App\Http\Livewire\Manager;

use Livewire\Component;

class ManagerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.manager.manager-dashboard-component')->layout("layouts.app.base", ['title' => 'GESTOR']);
    }
}
