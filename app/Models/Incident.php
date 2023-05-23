<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
    protected $table = 'incidents';

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'id_activity');
    }
}
