<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use App\Models\Expenses;
use App\Models\Projects;

class AdminDashboardComponent extends Component
{


    public $totalUsers;
    public $totalVehicles;
    public $totalMaintenances;
    public $totalIncidents;


    public function total(){
        return 3;
    }

    public $statistics;

    public function mount()
    {
        // Consultar os dados necessários no banco de dados para as estatísticas
        
        // Definir os dados para as estatísticas
        $this->statistics = [
            'labels' => ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
            'data' => [2, 20, 6, 12, 45, 18],
        ];
    }

    public function render()
    {

         // Consultar os dados necessários para o dashboard
         $projects = Project::all();
         $expenses = Expenses::all();
 
         // Calcular os valores totais dos expenses por projeto
         $expensesPerProject = $expenses->groupBy('projeto_id')->map(function ($expenses) {
             return $expenses->sum('valor');
         });
 
         // Calcular os totais dos expenses e projects
         $totalExpenses = $expenses->sum('valor');
         $totalProjects = $projects->count();
 
         return view('livewire.admin.dashboard-component', compact('projects', 'expensesPerProject', 'totalExpenses', 'totalProjects'))->layout("layouts.app.base");
     

    }
}
