<?php

namespace App\Http\Livewire\GroupCompany\FleetManager\Maintenances;

use Livewire\Component;

class Create extends Component
{
 
    public $descricao;

    public function render()
    {
        return view('livewire.group-company.fleet-manager.maintenances.create');
    }

    public function cadastrarManutencao()
    {
        $this->validate([
            'descricao' => 'required',
        ]);

        Manutencao::create([
            'descricao' => $this->descricao,
        ]);

        session()->flash('message', 'Manutenção cadastrada com sucesso!');

        $this->reset('descricao');
        $this->emit('manutencaoCadastrada');
    }

}
