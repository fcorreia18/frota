<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Abastecimento</title>
</head>
<body>
    <h1>Relatório de Abastecimento</h1>

    <!-- Aqui você pode exibir os dados do relatório de abastecimento no formato desejado -->
    
    <!-- Exemplo de exibição de dados -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Veículo</th>
                <th>Data</th>
                <!-- Outras colunas -->
            </tr>
        </thead>
        <tbody>
            @foreach($abastecimentos as $abastecimento)
            <tr>
                <td>{{ $abastecimento->id }}</td>
                <td>{{ $abastecimento->veiculo }}</td>
                <td>{{ $abastecimento->data }}</td>
                <!-- Outras colunas -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
