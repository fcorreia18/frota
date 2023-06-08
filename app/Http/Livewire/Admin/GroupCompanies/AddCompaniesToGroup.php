<?php

namespace App\Http\Livewire\Admin\GroupCompanies;

use App\Models\Company;
use Livewire\Component;

class AddCompaniesToGroup extends Component
{
    public $grupoId;
    public $empresasSelecionadas = [];

    public function mount($grupoId)
    {
        $this->grupoId = $grupoId;
    }

    public function render()
    {
        $empresas = Company::all();

        return view('livewire.admin.group-companies.add-companies-to-group', compact('empresas'));
    }

    public function adicionarEmpresas()
    {
        // Lógica para associar as empresas selecionadas ao grupo de empresas
        // ...

        session()->flash('message', 'Empresas adicionadas ao grupo com sucesso!');
        session()->flash('show_buttons', false);
        // Disparar o evento para atualizar a lista de empresas
        $this->emit('companiesAdd');
    }
}
