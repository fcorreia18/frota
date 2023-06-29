<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProviderServices extends Model
{
    use HasFactory;
    protected $table = 'service_provider_services';
    protected $fillable = ["id_service_provider", "id_service",  "unit_cost", "qtd"];

}
