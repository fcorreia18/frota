<?php

namespace App\Http\Livewire\GroupCompany;

use Livewire\Component;

class Details extends Component
{

    public $grupoEmpresaId;

    protected $listeners = [
        'gestorFrotaCadastrado' => '$refresh',
    ];

    public function mount($grupoEmpresaId)
    {
        $this->grupoEmpresaId = $grupoEmpresaId;
    }

    public function render()
    {
        $grupoEmpresa = GrupoEmpresa::findOrFail($this->grupoEmpresaId);
        $gestoresFrota = GestorFrota::where('grupo_empresa_id', $this->grupoEmpresaId)->get();

        return view('livewire.group-company.details', compact('grupoEmpresa', 'gestoresFrota'));
    }
}
