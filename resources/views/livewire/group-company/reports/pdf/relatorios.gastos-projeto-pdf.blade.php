<h3>Período Selecionado: {{ $dataInicio }} - {{ $dataFim }}</h3>

        @forelse ($relatorioGastos as $projeto => $veiculos)
            <h4>{{ $projeto }}</h4>

            @forelse ($veiculos as $veiculo => $gastos)
                <h5>{{ $veiculo }}</h5>

                @if ($gastos->isNotEmpty())
                    <table>
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gastos as $gasto)
                                <tr>
                                    <td>{{ $gasto->tipo }}</td>
                                    <td>{{ $gasto->valor }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Sem gastos no período selecionado para este veículo.</p>
                @endif
            @empty
                <p>Sem veículos associados a este projeto.</p>
            @endforelse
        @empty
            <p>Sem projetos com gastos no período selecionado.</p>
        @endforelse













        <!-- resources/views/relatorios/gastos-projeto-pdf.blade.php -->

{{-- <div>
    <h3>Período Selecionado: {{ $dataInicio }} - {{ $dataFim }}</h3>

    @forelse ($relatorioGastos as $projeto => $veiculos)
        <h4>Gastos do Projeto: {{ $projeto }}</h4>

        @forelse ($veiculos as $veiculo => $gastos)
            <h5>Veículo: {{ $veiculo }}</h5>

            @if ($gastos->isNotEmpty())
                <h6>Abastecimentos:</h6>
                <ul>
                    @foreach ($gastos as $gasto)
                        @if ($gasto->tipo === 'abastecimento')
                            <li>{{ $gasto->tipo }}: {{ $gasto->valor }}</li>
                        @endif
                    @endforeach
                </ul>

                <h6>Manutenções:</h6>
                <ul>
                    @foreach ($gastos as $gasto)
                        @if ($gasto->tipo === 'manutenção')
                            <li>{{ $gasto->tipo }}: {{ $gasto->valor }}</li>
                        @endif
                    @endforeach
                </ul>
            @else
                <p>Sem gastos no período selecionado para este veículo.</p>
            @endif
        @empty
            <p>Sem veículos associados a este projeto.</p>
        @endforelse
    @empty
        <p>Sem projetos com gastos no período selecionado.</p>
    @endforelse
</div> --}}
