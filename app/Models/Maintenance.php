<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = 'maintenances';
    protected $fillable = ["id_vehicle", "service_type",  "ref", "mileage", "responsible","paymente_receipt","date_scheduled","date_held"];


    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_vehicle');
    }

    public function getStatusColorAttribute(){
        return [
            "scheduled" => "warning",
            "done" => "success",
        ][$this->status] ?? "info";
    }

    public function service()
    {
        return $this->hasOne(ServiceProviderServices::class, 'id','service_type');
    }
}
