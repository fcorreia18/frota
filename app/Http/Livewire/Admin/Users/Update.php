<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Update extends Component
{
    protected $employee;    
    public $userId;
    public $company;
    public $groupCompany;

    public $name;
    public $id_number;
    public $address;
    public $driver_license;
    public $license_due_date;
    public $contact;

    public $auth_level;
  
    public function mount($userId)
    {
        $this->userId = $userId;
        $employee = Employee::findOrFail($userId);
        $this->employee = $employee;
        $this->company = $this->employee->company;
        $this->groupCompany = $this->employee->company->group;
        // dd($this->employee,$this->employee->user, $this->employee->company->group);
        $this->name = $employee->name;
        $this->id_number = $employee->id_number;
        $this->address = $employee->address;
        $this->driver_license = $employee->driver_license;
        $this->license_due_date = $employee->license_due_date;
        $this->contact = $employee->contact;
    }
    public function updateUser(){
        dd("metódo para mudar privilégios");
    }
    public function render()
    {
        // $employees = Employee::all()->load('user');
        return view('livewire.admin.users.update',["user"=> $this->employee,"company"=>$this->company, "groupCompany" => $this->groupCompany])->layout("layouts.app.base");
    }
   
}
