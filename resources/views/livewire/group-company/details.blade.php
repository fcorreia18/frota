<div>
    <h1>Detalhes do Grupo de Empresa</h1>

    <p>Nome: {{ $grupoEmpresa->nome }}</p>

    <h2>Gestores de Frota</h2>
    @foreach ($gestoresFrota as $gestorFrota)
        <p>{{ $gestorFrota->nome }}</p>
    @endforeach
</div>
