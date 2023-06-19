<?php

namespace App\Http\Livewire\GroupCompany\Reports;

use Livewire\Component;

class ProjectsExpensesReport extends Component
{
    public function render()
    {
        return view('livewire.group-company.reports.projects-expenses-report');
    }

    public function gerarRelatorioGastosProjeto()
{
    // Lógica para buscar os dados do relatório de gastos por projeto no período selecionado
    $gastos = Gasto::with('veiculo', 'projeto')
        ->whereBetween('data', [$this->dataInicio, $this->dataFim])
        ->get();

    // Gere o PDF utilizando a biblioteca Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml(view('livewire.relatorios.relatorio-gastos-projeto-pdf', compact('gastos')));
    $dompdf->setPaper('A4');
    $dompdf->render();

    // Retorne o arquivo PDF para download ou visualização
    return response()->streamDownload(function () use ($dompdf) {
        echo $dompdf->output();
    }, 'relatorio_gastos_projeto.pdf');
}

}
