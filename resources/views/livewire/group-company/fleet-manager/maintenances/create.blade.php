<div>
    <h1>Cadastro de Manutenção</h1>

    <form wire:submit.prevent="cadastrarManutencao">
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" wire:model="descricao">
            @error('descricao') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Cadastrar Manutenção</button>
    </form>
</div>
