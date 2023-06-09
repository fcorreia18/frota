<?php

namespace App\Http\Livewire\GroupCompany\FleetManager\Incidents;

use App\Models\Incident;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $incidentes = Incident::all();

        return view('livewire.group-company.fleet-manager.incidents.index', compact('incidentes'));
    }
}
