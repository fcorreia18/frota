<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleDocs extends Model
{
    use HasFactory;
    protected $table = 'vehicle_docs';

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_vehicle');
    }
}
