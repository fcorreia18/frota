<div>
    <h1>Lista de Manutenções</h1>

    <ul>
        @foreach ($manutencoes as $manutencao)
            <li>{{ $manutencao->descricao }}</li>
        @endforeach
    </ul>
</div>
