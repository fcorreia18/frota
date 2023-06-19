<!-- resources/views/relatorios/gastos-projeto.blade.php -->

<div>
    <h2>Relatório de Gastos por Projeto</h2>

    <form wire:submit.prevent="gerarRelatorio">
        <div>
            <label for="dataInicio">Data de Início:</label>
            <input type="date" id="dataInicio" wire:model.defer="dataInicio">
        </div>

        <div>
            <label for="dataFim">Data de Fim:</label>
            <input type="date" id="dataFim" wire:model.defer="dataFim">
        </div>

        <button type="submit">Gerar Relatório</button>
    </form>
    
    @if ($relatorioGerado)
        @livewire('relatorios.gastos-projeto-pdf', ['relatorioGastos' => $relatorioGastos])
    @endif
</div>
