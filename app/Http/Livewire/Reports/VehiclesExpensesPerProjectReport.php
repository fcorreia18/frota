<?php

namespace App\Http\Livewire\GroupCompany\Reports;

use Livewire\Component;

class VehiclesExpensesPerProjectReport extends Component
{
    public $dataInicio;
    public $dataFim;
    public $projetoId;
    public $veiculoId;
    public function render()
    {
        return view('livewire.group-company.reports.vehicles-expenses-per-project-report');
    }
    public function gerarRelatorioGastosVeiculoProjeto()
{
    // Lógica para buscar os dados de gastos por veículo por projeto específico no período selecionado
    $gastos = Gasto::where('projeto_id', $this->projetoId)
                    ->where('veiculo_id', $this->veiculoId)
                    ->whereBetween('data', [$this->dataInicio, $this->dataFim])
                    ->get();

    // Gere o PDF utilizando a biblioteca Dompdf
    $pdf = PDF::loadView('relatorios.gastos_veiculo_projeto', ['gastos' => $gastos]);

    // Retorne o arquivo PDF para download ou visualização
    return $pdf->download('relatorio_gastos_veiculo_projeto.pdf');
}
}
