<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Incidentes</title>
    <style>
        /* Estilos CSS para o relatório */
        /* ... */
    </style>
</head>
<body>
    <h2>Relatório de Incidentes</h2>
    <p>Data de Início: {{ $dataInicio }}</p>
    <p>Data de Fim: {{ $dataFim }}</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Descrição</th>
                <!-- ... Outras colunas -->
            </tr>
        </thead>
        <tbody>
            @foreach ($incidentes as $incidente)
            <tr>
                <td>{{ $incidente->id }}</td>
                <td>{{ $incidente->data }}</td>
                <td>{{ $incidente->descricao }}</td>
                <!-- ... Outras colunas -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
