<?php

namespace App\Http\Livewire\Admin\Companies;

use App\Models\Company;
use Livewire\Component;

class Create extends Component
{


    public $name;
    public $email;
    public $nif;
    public $address;
    public $contact;

    public $showForm = false;


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
    public function addCompany()
    {
        $existingCompany = Company::where('name', $this->name)->first();

        if ($existingCompany) {
            session()->flash('error', 'Já existe uma empresa com esse nome.');
            return;
        }
        try {
            Company::create([
                'name' => $this->name,
                'description' => $this->description,
                'started_at' => $this->started_at,
                'country' => $this->country,
                'industry' => $this->industry,
                'contact' => $this->contact,
                'status' => "ativo",
            ]);
        } catch (\Throwable $th) {
            array_push($this->errors, $th->getMessage());
            session()->flash('error',  $th->getMessage());
            return;
        }
        $this->resetFields();
        // Disparar o evento para atualizar a lista de grupo de empresas
        $this->emit('groupAdd', 'Grupo de empresas cadastrado com sucesso!');



    }
    protected $listeners = ['toggleForm'];
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function render()
    {
        return view('livewire.admin.companies.create');
    }

    
}
