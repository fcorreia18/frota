<div>
    <h1>Relatório de Manutenções</h1>

    <form wire:submit.prevent="gerarRelatorio">
        <label for="dataInicio">Data de Início:</label>
        <input type="date" wire:model="dataInicio" id="dataInicio">

        <label for="dataFim">Data de Fim:</label>
        <input type="date" wire:model="dataFim" id="dataFim">

        <label for="veiculoId">Veículo:</label>
        <select wire:model="veiculoId" id="veiculoId">
            <option value="">Selecione um veículo</option>
            @foreach ($veiculos as $veiculo)
                <option value="{{ $veiculo->id }}">{{ $veiculo->nome }}</option>
            @endforeach
        </select>

        <button type="submit">Gerar Relatório</button>
    </form>
</div>
