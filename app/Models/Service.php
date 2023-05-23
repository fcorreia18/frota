<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'supplier_service_company')
                    ->withPivot('cost')
                    ->withTimestamps();
    }

}
