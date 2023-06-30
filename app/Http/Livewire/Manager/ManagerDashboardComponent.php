<?php

namespace App\Http\Livewire\Manager;

use App\Models\Project;
use Livewire\Component;
use App\Models\Expenses;

class ManagerDashboardComponent extends Component
{


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
        $expensesPerProject = $expenses->groupBy('id_project')->map(function ($expenses) {
           return  $expenses->pluck('amount')->toArray();
        })->flatten();

        // echo"<pre>";
        // var_dump($expensesPerProject->values());
        // echo"</pre>";
        // Calcular os totais dos expenses e projects
        $totalExpenses = $expenses->sum('amount');
        $totalProjects = $projects->count();

        // dd($expensesPerProject->values()->flatten(), $expenses);

        return view('livewire.manager.manager-dashboard-component',compact('projects', 'expensesPerProject', 'totalExpenses', 'totalProjects'))->layout("layouts.app.base", ['title' => 'GESTOR']);
    }
}
