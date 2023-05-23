<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public function services()
    {
        return $this->belongsToMany(Service::class, 'supplier_service_company')
                    ->withPivot('cost')
                    ->withTimestamps();
    }
    protected $table = 'suppliers';

    public function parts()
    {
        return $this->belongsToMany(Part::class, 'supplier_parts')->withPivot('cost');
    }

}
