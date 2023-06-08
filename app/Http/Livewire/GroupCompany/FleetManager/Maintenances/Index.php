<?php

namespace App\Http\Livewire\GroupCompany\FleetManager\Maintenances;

use App\Models\Maintenance;
use Livewire\Component;

class Index extends Component
{
  
    public function render()
    {
        $manutencoes = Maintenance::all();

        return view('livewire.group-company.fleet-manager.maintenances.index', compact('manutencoes'));
    }
}
