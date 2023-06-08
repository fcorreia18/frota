<?php

namespace App\Http\Livewire\Admin\GroupCompanies;

use App\Models\Company;
use App\Models\GroupCompanies;
use Livewire\Component;

class Store extends Component
{
    
    public $name;
    public $newCompany;
    public $addCompanies;
    public $companies;

    public function mount()
    {
        $this->companies = Company::all();
    }

    public function updatedNovaCompany()
    {
        if (!empty($this->novaCompany)) {
            $company = new Company();
            $company->name = $this->novaCompany;
            // Salvar a nova Company no banco de dados
            $company->save();

            $this->companys->push($company); // Adicionar a nova empresa à lista de companies
            $this->newCompany = ''; // Limpar o campo de nova empresa
        }
    }

    public function save()
    {
        // Lógica para salvar o grupo de empresas no banco de dados
        $groupCompanies = new GroupCompanies();
        $groupCompanies->name = $this->name;
        // Associar as empresas selecionadas ao grupo de empresas
        $groupCompanies->empresas()->sync($this->addCompanies);
        // Salvar o grupo de empresas no banco de dados
        $groupCompanies->save();

        session()->flash('success', 'Grupo de empresas cadastrado com sucesso!');

        $this->resetFields();

   // Redirecionar para a página de adicionar empresas ao grupo
//    $this->redirectRoute('empresas.add', ['grupoId' => 1]); // Substitua o valor '1' pelo ID correto do grupo de empresas

        // Redirecionar para a lista de grupo de empresas
        return redirect()->route('grupo-empresas.index');
    }

    private function resetFields()
    {
        $this->name = '';
        $this->newCompany = '';
        $this->addCompanies = [];
    }

    public function render()
    {
        return view('livewire.admin.group-companies.store', [
            'companies' => $this->companies,
        ]);
    }
}
