<div>
    <h1>Lista de Incidentes</h1>

    <ul>
        @foreach ($incidentes as $incidente)
            <li>{{ $incidente->descricao }}</li>
        @endforeach
    </ul>
</div>
