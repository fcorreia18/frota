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
    public $showForm = false;
    public $errors = [];
    protected $rules = [
        'name' => 'required|string|min:3',
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
    ];
    private function resetFields()
    {
        $this->name = '';
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
