<div>
    <h1>Cadastro de Incidente</h1>

    <form wire:submit.prevent="cadastrarIncidente">
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" wire:model="descricao">
            @error('descricao') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Cadastrar Incidente</button>
    </form>
</div>
