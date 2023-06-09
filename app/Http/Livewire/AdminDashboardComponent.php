<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDashboardComponent extends Component
{


    public function total(){
        return 3;
    }

    public $estatisticas;

    public function mount()
    {
        // Consultar os dados necessários no banco de dados para as estatísticas
        
        // Definir os dados para as estatísticas
        $this->estatisticas = [
            'labels' => ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
            'dados' => [2, 20, 6, 12, 45, 18],
        ];
    }

    public function render()
    {
        return view('livewire.admin.dashboard-component', [

            'total_empresas' => 12,#Post::all()
            'total_funcionarios' => 12,#Post::all()

        ])->layout(\App\View\Components\AdminLayout::class);
    }
}
