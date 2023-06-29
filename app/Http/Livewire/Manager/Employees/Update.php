<?php

namespace App\Http\Livewire\Manager\Employees;

use App\Models\User;
use Livewire\Component;
use App\Models\Employee;

class Update extends Component
{
    public $employee;    
    public $employeeId;
    public $company;
    public $groupCompany;

    public $name;
    public $id_number;
    public $address;
    public $driver_license;
    public $license_due_date;
    public $contact;

    public $auth_level;


    public $errors = [];
    protected $rules = [
        'name' => 'required|string|min:3|max:50',
        'id_number' => 'required|string|min:3|max:50',
        'driver_license' => 'required|string|min:5|max:12',
        'contact' => 'required|min:9|max:15',
        'address' => 'required|string|min:4|max:100',
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
        'name.max' => 'O campo de nome deve no máximo 50 caracteres.',
        'address.required' => 'O campo de endereço é obrigatório.',
        'address.min' => 'O campo de endereço deve ter pelo menos 4 caracteres.',
        'address.max' => 'O campo de endereço deve ter no máximo 100 caracteres.',
        'id_number.required' => 'O campo de Nº de Identificação é obrigatório.',
        'id_number.min' => 'O campo de Nº de Identificação deve ter pelo menos 3 caracteres.',
        'id_number.max' => 'O campo de Nº de Identificação deve no máximo 50 caracteres.',
        'contact.required' => 'O campo de contacto é obrigatório.',
        'contact.min' => 'O campo de contacto deve ter pelo menos 9 caracteres.',
        'contact.max' => 'O campo de contacto deve no máximo 12 caracteres.',
        'driver_license.required' => 'O campo de data de Constituição é obrigatório.',
        'driver_license.min' => 'O campo de Nº da carta deve ter pelo menos 3 caracteres.',
        'driver_license.max' => 'O campo de Nº da carta deve no máximo 12 caracteres.',
    ];

    public function mount($employeeId)
    {
        $this->employeeId = $employeeId;
        $employee = Employee::findOrFail($employeeId);
        $this->employee = $employee;
        $this->company = $this->employee->company;
        $this->groupCompany = $this->employee->company->group;
        $this->name = $employee->name;
        $this->id_number = $employee->id_number;
        $this->address = $employee->address;
        $this->driver_license = $employee->driver_license;
        $this->license_due_date = $employee->license_due_date;
        $this->contact = $employee->contact;
    }
    public function updateEmployee(){

        $this->validate();

        try {
            $this->employee->update(["name"=>$this->name, "address"=>$this->address, "contact"=>$this->contact, "id_number"=>$this->id_number,"driver_license"=>$this->driver_license,"license_due_date"=>$this->license_due_date,]);

        } catch (\Throwable $th) {
            array_push($this->errors, $th->getMessage());
            session()->flash('error',  $th->getMessage());
        }
        

        $existingUser = User::where("id_employee", $this->employeeId);
        

        if ($existingUser) {
            $existingUser->update([
                "auth_level"=>$this->auth_level
            ]);
        }

        $this->resetFields();
        // Disparar o evento para atualizar a lista de grupo de empresas
        $this->emit('userUpdated', 'utilizador atualizado com sucesso!');
    }

    private function resetFields()
    {
        $this->name = '';
        $this->address = "";
        $this->driver_license = "";
        $this->id_number = "";
        $this->contact = "";
        $this->license_due_date = "";
    }

  
    public function render()
    {
        return view('livewire.manager.employees.update',["employees"=> $this->employee,"company"=>$this->company, "groupCompany" => $this->groupCompany])->layout("layouts.app.base");
    }
}
