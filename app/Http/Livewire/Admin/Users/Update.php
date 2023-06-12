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
    public $name;
    public $description;
    public $started_at;
    public $country;
    public $industry;
    public $contact;
  
    public function mount($userId)
    {
        $this->userId = $userId;
        $employee = Employee::findOrFail($userId);
        $this->employee = $employee;

        $this->name = $employee->name;
        $this->description = $employee->description;
        $this->country = $employee->country;
        $this->started_at = $employee->started_at;
        $this->contact = $employee->contact;
        $this->industry = $employee->industry;
    }
    public function render()
    {
        // $employees = Employee::all()->load('user');
        return view('livewire.admin.users.update',["user"=> $this->employee,])->layout(\App\View\Components\AdminLayout::class);
    }
   
}
