<div>
    <h1>Detalhes do Grupo de Empresa</h1>

    <p>Nome: {{ $grupoEmpresa->nome }}</p>

    <h2>Usuários</h2>
    @foreach ($usuarios as $usuario)
        <p>{{ $usuario->nome }} - {{ $usuario->email }}</p>
    @endforeach
</div>