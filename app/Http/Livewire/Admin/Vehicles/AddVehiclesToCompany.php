<?php

namespace App\Http\Livewire\Admin\Vehicles;

use App\Models\Company;
use App\Models\Vehicle;
use Livewire\Component;

class AddVehiclesToCompany extends Component
{
    

    public $companyId;
    public $veiculosSelecionados = [];

    public function mount($companyId)
    {
        $this->companyId = $companyId;
    }

    public function render()
    {
        $company = Company::findOrFail($this->companyId);
        $veiculos = Vehicle::all();

        return view('livewire.admin.vehicles.add-vehicles-to-company', compact('company', 'veiculos'));
    }

    public function adicionarVeiculos()
    {
        // Lógica para associar os veículos selecionados à company
        // ...

        session()->flash('message', 'Veículos adicionados à empresa com sucesso!');
        session()->flash('show_buttons', false);

        // Disparar o evento para atualizar a lista de veículos
        $this->emit('vehiclesAdd');
    }
}
