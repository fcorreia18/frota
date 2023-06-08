<?php

namespace App\Http\Livewire\Company\Manager\FleetManager;

use App\Models\Company;
use Livewire\Component;

class Store extends Component
{
    public $empresaId;
    public $nome;
    public $email;
    public $veiculosGerenciados = [];

    public function mount($empresaId)
    {
        $this->empresaId = $empresaId;
    }

    public function render()
    {
        $empresa = Company::findOrFail($this->companyId);
        $veiculos = $empresa->veiculos;

        return view('livewire.company.manager.fleet-manager.store', compact('empresa', 'veiculos'));
    }

    public function cadastrarGestorFrota()
    {
        // Validar e salvar os dados do gestor de frota
        $this->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        $gestorFrota = new GestorFrota();
        $gestorFrota->nome = $this->nome;
        $gestorFrota->email = $this->email;
        $gestorFrota->veiculos_gerenciados = $this->veiculosGerenciados;

        // Salvar o gestor de frota
        // ...

        session()->flash('message', 'Gestor de Frota cadastrado com sucesso!');
        session()->flash('show_buttons', false);

        // Disparar o evento para atualizar a lista de gestores de frota
        $this->emit('gestorFrotaCadastrado');
    }
}
