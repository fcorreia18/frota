<div>
    <h1>Adicionar Veículos à Empresa</h1>

    <p>Empresa: {{ $empresa->nome }}</p>

    <form wire:submit.prevent="adicionarVeiculos">
        <div>
            <label for="veiculos">Selecione os Veículos:</label>
            <select id="veiculos" multiple wire:model="veiculosSelecionados">
                @foreach ($veiculos as $veiculo)
                    <option value="{{ $veiculo->id }}">{{ $veiculo->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Associar Veículos</button>
    </form>
</div>
