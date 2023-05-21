<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAssignedVehicle extends Model
{
    use HasFactory;
    protected $table = 'employee_assigned_vehicle';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_vehicle');
    }
}
