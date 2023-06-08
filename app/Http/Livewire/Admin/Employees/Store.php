<?php

namespace App\Http\Livewire\Admin\Employees;

use App\Models\GroupCompanies;
use Livewire\Component;

class Store extends Component
{

    public $name;
    public $showToast = false;

    protected $rules = [
        'name' => 'required|string|min:3',
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
    ];
    // public function store()
    // {
    //     try {
    //         $this->validate();
    //         $this->emit('show-success-message', 'A empresa foi cadastrada com sucesso!');
    //     } catch (\Throwable $th) {
    //         $this->emit('show-error-message', $th->getMessage());
    //     }


    //     $this->emit('reset-show-toast');
    //     // Restante do seu código para o envio do formulário...



    // }

    protected function showToast($type, $message)
    {
        $this->showToast = true;
        $this->dispatchBrowserEvent('show-toast', [
            'type' => $type,
            'message' => $message,
        ]);
    }
    public function render()
    {
        return view('livewire.admin.employees.store');
    }

    public function store()
    {
        // Lógica para cadastrar o grupo de empresas
        try {
            $this->validate();
            GroupCompanies::create([
                'name' => $this->name,
            ]);
        } catch (\Throwable $th) {
            session()->flash('message', $th->getMessage());
        }

        // Limpar o campo de nome após o cadastro
        $this->name = '';

        // Exibir mensagem de sucesso com os botões adicionais
        session()->flash('message', 'Grupo de empresas cadastrado com sucesso!');
        session()->flash('show_buttons', true);

        // Disparar o evento para atualizar a lista de grupo de empresas
        $this->emit('groupCompaniesAdd');
    }
}
