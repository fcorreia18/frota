<div>
    <h2>Relatório de Manutenção</h2>
    <form wire:submit.prevent="gerarRelatorioManutencao">
        <label for="dataInicioManutencao">Data de Início:</label>
        <input type="date" id="dataInicioManutencao" wire:model="dataInicioManutencao">

        <label for="dataFimManutencao">Data de Fim:</label>
        <input type="date" id="dataFimManutencao" wire:model="dataFimManutencao">

        <button type="submit">Gerar Relatório</button>
    </form>

    @if ($relatorioManutencao)
    <canvas id="graficoManutencao" width="400" height="200"></canvas>
    @endif
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('relatorioManutencaoGerado', function () {
            var ctx = document.getElementById('graficoManutencao').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($relatorioManutencao['labels']),
                    datasets: [{
                        label: 'Quantidade de Manutenções',
                        data: @json($relatorioManutencao['dados']),
                        backgroundColor: 'rgba(0, 123, 255, 0.5)',
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    });
</script>
@endpush
