<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Relatório de Manutenções</h1>

    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Descrição</th>
                <th>Custo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($manutencoes as $manutencao)
                <tr>
                    <td>{{ $manutencao->data }}</td>
                    <td>{{ $manutencao->descricao }}</td>
                    <td>{{ $manutencao->custo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
