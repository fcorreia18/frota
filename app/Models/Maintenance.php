<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = 'maintenances';

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_vehicle');
    }

    public function getStatusColorAttribute(){
        return [
            "scheduled" => "info",
            "scheduled" => "success",
        ][$this->status] ?? "info";
    }
}
