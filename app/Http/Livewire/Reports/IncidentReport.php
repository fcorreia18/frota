<?php

namespace App\Http\Livewire\GroupCompany\Reports;

use App\Models\Incident;
use Dompdf\Dompdf;

use Livewire\Component;

class IncidentReport extends Component
{
    public function render()
    {
        return view('livewire.group-company.reports.incident-report');
    }



public function gerarRelatorioPDF()
{
    $dataInicio = $this->dataInicio;
    $dataFim = $this->dataFim;

    // Lógica para buscar os dados dos incidentes no período selecionado
    $incidentes = Incident::whereBetween('data', [$dataInicio, $dataFim])->get();

    // Gere o conteúdo HTML do relatório
    $html = view('incidentes.relatorio_pdf', compact('incidentes', 'dataInicio', 'dataFim'))->render();

    // Gere o PDF utilizando a biblioteca Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Retorne o arquivo PDF para download ou visualização
    $dompdf->stream('relatorio_incidentes.pdf');





    //   // Gerar o conteúdo do relatório em HTML
    //   $html = view('relatorios.incidentes-pdf', compact('incidentes'));

    //   // Instanciar o objeto Dompdf
    //   $dompdf = new Dompdf();

    //   // Carregar o conteúdo HTML no Dompdf
    //   $dompdf->loadHtml($html);

    //   // Renderizar o PDF
    //   $dompdf->render();

    //   // Gerar o nome do arquivo PDF
    //   $filename = 'relatorio_incidentes.pdf';

    //   // Salvar o arquivo PDF no diretório público
    //   $dompdf->stream($filename);
}
}
