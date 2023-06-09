<?php

namespace App\Http\Livewire\GroupCompany\FleetManager\Incidents;

use Livewire\Component;

class Create extends Component
{
  
    public $descricao;

    public function render()
    {
        return view('livewire.group-company.fleet-manager.incidents.create');
    }

    public function cadastrarIncidente()
    {
        $this->validate([
            'descricao' => 'required',
        ]);

        Incidente::create([
            'descricao' => $this->descricao,
        ]);

        session()->flash('message', 'Incidente cadastrado com sucesso!');
        session()->flash('show_buttons', false);

        $this->reset('descricao');
        $this->emit('incidenteCadastrado');
    }
}
