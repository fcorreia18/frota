<div>
    <h1>Cadastro de Usuário</h1>

    <p>Grupo de Empresa: {{ $grupoEmpresa->nome }}</p>

    <form wire:submit.prevent="cadastrarUsuario">
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

        <button type="submit">Cadastrar Usuário</button>
    </form>
</div>
