<div>
    <h1>Adicionar Empresas ao Grupo: {{ $grupo->nome }}</h1>

    <form wire:submit.prevent="adicionarEmpresas">
        <p>Selecione as empresas que deseja adicionar ao grupo:</p>

        @foreach ($empresas as $empresa)
            <div>
                <input type="checkbox" value="{{ $empresa->id }}" wire:model="empresasSelecionadas">
                <label>{{ $empresa->nome }}</label>
            </div>
        @endforeach

        <button type="submit">Associar Empresas</button>
    </form>

    @if (session()->has('message') && session()->has('show_buttons'))
        <div>
            <p>{{ session('message') }}</p>
            <button>Adicionar Novo Grupo de Empresas</button>
            <button>Adicionar Empresas ao Grupo</button>
        </div>
    @endif
</div>
