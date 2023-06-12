<?php

namespace App\Http\Livewire\Admin\GroupCompanies;

use App\Models\GroupCompanies;
use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.group-companies.create')->layout(\App\View\Components\AdminLayout::class);
    }

    public $name;
    public $description;
    public $started_at;
    public $country;
    public $industry;
    public $contact;
    public $status;

    public $showForm = false;
    public $errors = [];
    protected $rules = [
        'name' => 'required|string|min:3|max:50',
        'description' => 'required|string|min:10|max:250',
        'started_at' => 'required',
        'country' => 'required|string|min:3|max:50',
        'industry' => 'required|string|min:3|max:50',
        'contact' => 'required|string|min:9|max:15',
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
        'name.max' => 'O campo de nome deve no máximo 50 caracteres.',
        'description.required' => 'O campo de descrição é obrigatório.',
        'description.min' => 'O campo de descrição deve ter pelo menos 3 caracteres.',
        'description.max' => 'O campo de descrição deve ter no máximo 250 caracteres.',
        'country.required' => 'O campo de Pais é obrigatório.',
        'country.min' => 'O campo de País deve ter pelo menos 3 caracteres.',
        'country.max' => 'O campo de País deve no máximo 50 caracteres.',
        'industry.required' => 'O campo de Industria é obrigatório.',
        'industry.min' => 'O campo de Industria deve ter pelo menos 3 caracteres.',
        'industry.max' => 'O campo de Industria deve no máximo 50 caracteres.',
        'contact.required' => 'O campo de contacto é obrigatório.',
        'contact.min' => 'O campo de contacto deve ter pelo menos 9 caracteres.',
        'contact.max' => 'O campo de contacto deve no máximo 50 caracteres.',
        'started_at.required' => 'O campo de data de Constituição é obrigatório.',

    ];
    private function resetFields()
    {
        $this->name = '';
        $this->description = "";
        $this->started_at = "";
        $this->country = "";
        $this->industry = "";
        $this->contact = "";
    }
    public function addGroup()
    {
        $this->validate();
        $existingCompany = GroupCompanies::where('name', $this->name)->first();

        if ($existingCompany) {
            session()->flash('error', 'Já existe uma grupo de empresa com esse nome.');
            return;
        }
        try {
            GroupCompanies::create([
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
}
