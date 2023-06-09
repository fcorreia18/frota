<?php

namespace App\Http\Livewire\GroupCompany\FleetManager\Reports;

use Dompdf\Dompdf;
use Livewire\Component;
use App\Models\Maintenance;

class MaintenancesReport extends Component
{
    public $dataInicio;
    public $dataFim;
    public $veiculoId;

    public function gerarRelatorio()
    {
        // Consultar as manutenções do veículo nos meses especificados
        $manutencoes = Maintenance::where('veiculo_id', $this->veiculoId)
            ->whereBetween('data', [$this->dataInicio, $this->dataFim])
            ->get();

        // Gerar o relatório em PDF usando a biblioteca Dompdf
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml(view('livewire.group-company.fleet-manager.reports.pdf.maintenances-report-pdf', compact('manutencoes')));
        // $dompdf->render();
        // $dompdf->stream('relatorio_manutencoes.pdf');


        // Gere o conteúdo HTML do relatório
        $html = view('manutencao.relatorio_pdf', compact('manutencoes', 'dataInicio', 'dataFim'))->render();

        // Gere o PDF utilizando a biblioteca Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Retorne o arquivo PDF para download ou visualização
        $dompdf->stream('relatorio_manutencao.pdf');


    //     // Gere o PDF utilizando a biblioteca Dompdf
    // $pdf = PDF::loadView('relatorios.manutencao', ['manutencoes' => $manutencoes]);

    // // Retorne o arquivo PDF para download ou visualização
    // return $pdf->download('relatorio_manutencao.pdf');
    }

    public function render()
    {
        return view('livewire.group-company.fleet-manager.reports.maintenances-report');
    }
}
