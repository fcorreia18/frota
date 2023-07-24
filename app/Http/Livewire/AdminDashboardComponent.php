<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Project;
use Livewire\Component;
use App\Models\Expenses;
use App\Models\Incident;
use App\Models\Vehicle;

class AdminDashboardComponent extends Component
{


    public $totalUsers;
    public $totalVehicles = 3;
    public $totalMaintenances;
    public $totalIncidents;


    public $statistics;

    public function mount()
    {
        // Consultar os dados necessários no banco de dados para as estatísticas

        // Definir os dados para as estatísticas
        $this->statistics = [
            'labels' => ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho'],
            'data' => [2, 10, 6, 4, 15, 18, 2],
        ];
    }

    public function getTotal(string $arg)
    {
        switch ($arg) {
            case 'users':
                return Employee::all()->sum("id");
                break;
            case 'vehicles':
                return Vehicle::all()->sum("id");
                break;
            case 'companies':
                return Company::all()->sum("id");
                break;
            case 'incidents':
                // return Incident::where("status", "solved")->sum("id");
                return 0;
                break;

            default:
                0;
                break;
        }
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
