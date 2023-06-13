<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $fillable = ["name", "nif", "address", "contact", "email", "id_group_company"];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'id_employee');
    }

    /**
     * Get the user that owns the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(GroupCompanies::class, 'id_group_company');
    }
}
