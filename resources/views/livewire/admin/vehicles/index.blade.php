<div>
    <h1>Listagem de Veículos</h1>

    @foreach ($empresas as $empresa)
        <h2>Empresa: {{ $empresa->nome }}</h2>

        <ul>
            @foreach ($empresa->veiculos as $veiculo)
                <li>{{ $veiculo->nome }}</li>
            @endforeach
        </ul>
    @endforeach
</div>
