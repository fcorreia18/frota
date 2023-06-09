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

         // Consultar os dados necessários para o dashboard
         $projetos = Projects::all();
         $gastos = Gasto::all();
 
         // Calcular os valores totais dos gastos por projeto
         $gastosPorProjeto = $gastos->groupBy('projeto_id')->map(function ($gastos) {
             return $gastos->sum('valor');
         });
 
         // Calcular os totais dos gastos e projetos
         $totalGastos = $gastos->sum('valor');
         $totalProjetos = $projetos->count();
 
        //  return view('livewire.dashboard', compact('projetos', 'gastosPorProjeto', 'totalGastos', 'totalProjetos'));
     

        return view('livewire.admin.dashboard-component', [

            'total_empresas' => 12,#Post::all()
            'total_funcionarios' => 12,#Post::all()

        ])->layout(\App\View\Components\AdminLayout::class);
    }
}
