<form wire:submit.prevent="gerarRelatorioPDF">
    <label for="dataInicio">Data de Início:</label>
    <input type="date" id="dataInicio" wire:model="dataInicio">

    <label for="dataFim">Data de Fim:</label>
    <input type="date" id="dataFim" wire:model="dataFim">

    <button type="submit">Gerar Relatório em PDF</button>
</form>
