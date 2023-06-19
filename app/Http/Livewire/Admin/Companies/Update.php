<?php

namespace App\Http\Livewire\Admin\Companies;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Update extends Component
{
    public $company;
    public $companyId;
    public $employees;

    public $name;
    public $email;
    public $nif;
    public $address;
    public $contact;

    public function mount($companyId)
    {
        $this->companyId = $companyId;
        $company = Company::findOrFail($companyId);
        $this->company = $company;
        $this->name = $company->name;


        // $this->description = $groupCompany->description;
        // $this->country = $groupCompany->country;
        // $this->started_at = $groupCompany->started_at;
        // $this->contact = $groupCompany->contact;
        // $this->industry = $groupCompany->industry;
        // $this->groupCompany = $groupCompany;

        //Auto preencher o formulário

        $this->employees = Employee::where('id_company', $company->id)->get();

    }

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|string|email',
        'nif' => 'required|string|min:3|max:10',
        'address' => 'required|string|min:4|max:50',
        'contact' => 'required|string|min:9|max:14',
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
        'email.required' => 'O campo de email é obrigatório.',
        'email.email' => 'O campo de email deve ser um endereço de email válido.',
        'nif.required' => 'O campo de NIF é obrigatório.',
        'nif.min' => 'O campo de NIF deve ter pelo menos 3 caracteres.',
        'nif.max' => 'O campo de NIF deve ter no máximo 10 caracteres.',
        'address.required' => 'O campo de endereço é obrigatório.',
        'address.min' => 'O campo de endereço deve ter pelo menos 4 caracteres.',
        'address.max' => 'O campo de endereço deve ter no máximo 50 caracteres.',
        'contact.required' => 'O campo de contato é obrigatório.',
        'contact.min' => 'O campo de contato deve ter pelo menos 9 caracteres.',
        'contact.max' => 'O campo de contato deve ter no máximo 14 caracteres.',
    ];
    private function resetFields()
    {
        $this->name = "";
        $this->email = "";
        $this->nif = "";
        $this->address = "";
        $this->contact = "";
    }
    public function updateCompany()
    {
        $this->validate();


        try {
            Company::create([
                'name' => $this->name,
                'email' =>  $this->email,
                'nif' => $this->nif,
                'contact' => $this->contact,
                'address' => $this->address,
            ]);
        } catch (\Throwable $th) {
            array_push($this->errors, $th->getMessage());
            session()->flash('error',  $th->getMessage());
        }

        // Disparar o evento para atualizar a lista de grupo de empresas
        $this->emit('success', 'Empresa cadastrada com sucesso!');

        $this->resetFields();
    }
    public function render()
    {
        return view('livewire.admin.companies.update',["employees"=> $this->employees])->layout("layouts.app.base");
    }
}
