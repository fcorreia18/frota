<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class Relatorio
{
    public function getTotalEmpresas($minutes = 60)
    {
        return Cache::remember('total_empresas', $minutes, function () {
            // Código para buscar o total de empresas
            return 2;//$totalFuncionarios

        });
    }

    public function getTotalFuncionarios()
    {
        return Cache::remember('total_funcionarios', $minutes = 60, function () {
            // Código para buscar o total de funcionários
            return 2;//$totalFuncionarios
        });
    }
}