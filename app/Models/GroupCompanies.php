<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupCompanies extends Model
{
    use HasFactory;
    protected $fillable = ["name","country","description","started_at","industry","contact","status"];

    /**
     * Get all of the comments for the GroupCompanies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companies(): HasMany
    {
        return $this->hasMany(Company::class, 'id_group_company', 'id');
    }
}
