<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }
}
