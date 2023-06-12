<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupCompanies extends Model
{
    use HasFactory;
    protected $fillable = ["name","country","description","started_at","industry","contact","status"];
}
