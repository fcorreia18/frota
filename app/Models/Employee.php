<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = ["name", "address", "contact", "email"];

    public function company()
    {
        return $this->hasOne(Company::class, 'id_company');
    }

  /**
   * Get the user associated with the Employee
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function user(): HasOne
  {
      return $this->hasOne(User::class, 'id_company');
  }
}
