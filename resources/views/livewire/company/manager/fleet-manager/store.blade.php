<div>
    <h1>Cadastro de Gestor de Frota</h1>

    <p>Empresa: {{ $empresa->nome }}</p>

    <form wire:submit.prevent="cadastrarGestorFrota">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" wire:model="nome">
            @error('nome') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="veiculosGerenciados">Veículos Gerenciados:</label>
            <select id="veiculosGerenciados" multiple wire:model="veiculosGerenciados">
                @foreach ($veiculos as $veiculo)
                    <option value="{{ $veiculo->id }}">{{ $veiculo->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Cadastrar Gestor de Frota</button>
    </form>
</div>
