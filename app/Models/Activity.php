<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function activityAttended()
    {
        return $this->hasMany(ActivityAttended::class, 'id_activity');
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class, 'id_activity');
    }
}
