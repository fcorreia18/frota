<div>
    <h2>Relatório de Gastos por Projeto</h2>

    <form wire:submit.prevent="render">
        <label for="projeto">Selecione o Projeto:</label>
        <select wire:model="projetoId" id="projeto">
            <option value="">Selecione</option>
            <!-- Loop para exibir as opções de projetos -->
            @foreach ($projetos as $projeto)
                <option value="{{ $projeto->id }}">{{ $projeto->nome }}</option>
            @endforeach
        </select>

        <label for="dataInicio">Data Início:</label>
        <input wire:model="dataInicio" type="date" id="dataInicio">

        <label for="dataFim">Data Fim:</label>
        <input wire:model="dataFim" type="date" id="dataFim">

        <button type="submit">Gerar Relatório</button>
    </form>

    @if ($projeto)
        <h3>Projeto: {{ $projeto->nome }}</h3>

        @if ($veiculos->count() > 0)
            @foreach ($veiculos as $veiculo)
                <h4>Veículo: {{ $veiculo->nome }}</h4>
                <ul>
                    <li>Abastecimento: {{ $gastosVeiculos[$veiculo->id]['abastecimento'] ?? 'Sem gastos' }}</li>
                    <li>Manutenções: {{ $gastosVeiculos[$veiculo->id]['manutencao'] ?? 'Sem gastos' }}</li>
                </ul>
            @endforeach
        @else
            <p>Nenhum veículo associado a este projeto.</p>
        @endif
    @endif
</div>
