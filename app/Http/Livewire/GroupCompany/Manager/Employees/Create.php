<?php

namespace App\Http\Livewire\GroupCompany\Companies\Employees;

use Livewire\Component;

class Create extends Component
{
   
    public $grupoEmpresaId;
    public $nome;
    public $email;

    public function mount($grupoEmpresaId)
    {
        $this->grupoEmpresaId = $grupoEmpresaId;
    }

    public function render()
    {
        $grupoEmpresa = GrupoEmpresa::findOrFail($this->grupoEmpresaId);

        return view('livewire.group-company.companies.employees.creat', compact('grupoEmpresa'));
    }

    public function cadastrarUsuario()
    {
        // Validar e salvar os dados do usuário
        $this->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        $usuario = new Usuario();
        $usuario->nome = $this->nome;
        $usuario->email = $this->email;
        $usuario->grupo_empresa_id = $this->grupoEmpresaId;
        $usuario->save();

        // Enviar e-mail com link de acesso para o usuário
        Mail::to($this->email)->send(new CadastroUsuarioMail($usuario));

        session()->flash('message', 'Usuário cadastrado com sucesso! Um e-mail foi enviado com as instruções de acesso.');
        session()->flash('show_buttons', false);

        // Disparar o evento para atualizar a lista de usuários
        $this->emit('usuarioCadastrado');
    }
}
