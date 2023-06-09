<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
     protected $table = 'vehicles';

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }

    public function vehicleDocs()
    {
        return $this->hasOne(VehicleDocs::class, 'id_vehicle');
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class, 'id_vehicle');
    }
    
    public function gastos()
    {
        return $this->hasMany(Gasto::class);
    }
}
