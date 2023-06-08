<?php

namespace App\Http\Livewire\GroupCompany\Companies\Employees;

use Livewire\Component;

class Index extends Component
{
    public $grupoEmpresaId;

    protected $listeners = [
        'usuarioCadastrado' => '$refresh',
    ];

    public function mount($grupoEmpresaId)
    {
        $this->grupoEmpresaId = $grupoEmpresaId;
    }

    public function render()
    {
        $grupoEmpresa = GrupoEmpresa::findOrFail($this->grupoEmpresaId);
        $usuarios = Usuario::where('grupo_empresa_id', $this->grupoEmpresaId)->get();

        return view('livewire.group-company.companies.employees.index', compact('grupoEmpresa', 'usuarios'));
    }
}
