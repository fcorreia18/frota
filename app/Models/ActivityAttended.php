<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityAttended extends Model
{
    use HasFactory;
    protected $table = 'activity_attended';

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_vehicle');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'id_activity');
    }
}
