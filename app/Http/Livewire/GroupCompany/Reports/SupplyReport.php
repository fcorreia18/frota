<?php

namespace App\Http\Livewire\GroupCompany\Reports;

use Dompdf\Dompdf;
use Livewire\Component;

class SupplyReport extends Component
{
    public function render()
    {
        return view('livewire.group-company.reports.supply-report');
    }

    public function gerarRelatorioAbastecimentoPDF()
{
    $dataInicio = $this->dataInicio;
    $dataFim = $this->dataFim;

    // Lógica para buscar os dados de abastecimento no período selecionado
    $abastecimentos = Abastecimento::whereBetween('data', [$dataInicio, $dataFim])->get();

    // Gere o conteúdo HTML do relatório
    $html = view('abastecimento.relatorio_pdf', compact('abastecimentos', 'dataInicio', 'dataFim'))->render();

    // Gere o PDF utilizando a biblioteca Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Retorne o arquivo PDF para download ou visualização
    $dompdf->stream('relatorio_abastecimento.pdf');







    //  // Gerar o conteúdo do relatório em HTML
    //  $html = view('relatorios.abastecimento-pdf', compact('abastecimentos'));

    //  // Instanciar o objeto Dompdf
    //  $dompdf = new Dompdf();

    //  // Carregar o conteúdo HTML no Dompdf
    //  $dompdf->loadHtml($html);

    //  // Renderizar o PDF
    //  $dompdf->render();

    //  // Gerar o nome do arquivo PDF
    //  $filename = 'relatorio_abastecimento.pdf';

    //  // Salvar o arquivo PDF no diretório público
    //  $dompdf->stream($filename);

}
}
