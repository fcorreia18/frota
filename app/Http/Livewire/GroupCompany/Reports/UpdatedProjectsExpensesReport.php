<?php

namespace App\Http\Livewire\GroupCompany\Reports;

use Livewire\Component;

class UpdatedProjectsExpensesReport extends Component
{
    public $projetoId;
    public $dataInicio;
    public $dataFim;

    public function render()
    {
        $projeto = Projeto::findOrFail($this->projetoId);

        // Obtenha os veículos associados ao projeto
        $veiculos = $projeto->veiculos;

        // Inicialize um array para armazenar os gastos de cada veículo
        $gastosVeiculos = [];

        // Percorra cada veículo e obtenha os gastos no período selecionado
        foreach ($veiculos as $veiculo) {
            // Obtenha os gastos do veículo no período selecionado
            $gastos = $veiculo->gastos()
                ->where('data', '>=', $this->dataInicio)
                ->where('data', '<=', $this->dataFim)
                ->get();

            // Armazene os gastos no array associado ao veículo
            $gastosVeiculos[$veiculo->id] = $gastos;
        }

   
        return view('livewire.group-company.reports.updated-projects-expenses-report', compact('projeto', 'veiculos', 'gastosVeiculos'));
    }  
}
