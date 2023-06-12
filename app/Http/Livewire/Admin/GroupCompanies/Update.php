<?php

namespace App\Http\Livewire\Admin\GroupCompanies;

use App\Models\Company;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\GroupCompanies;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class Update extends Component
{

    public $groupCompany;
    public $companies;
    

    public $groupId;
    public $name;
    public $description;
    public $started_at;
    public $country;
    public $industry;
    public $contact;

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
    public function mount($groupId)
    {
        $this->groupId = $groupId;
        $groupCompany = GroupCompanies::findOrFail($groupId);
        $this->companies = Company::where('id_group_company', $groupCompany->id)->get();



        $this->name = $groupCompany->name;
        $this->description = $groupCompany->description;
        $this->country = $groupCompany->country;
        $this->started_at = $groupCompany->started_at;
        $this->contact = $groupCompany->contact;
        $this->industry = $groupCompany->industry;
        $this->groupCompany = $groupCompany;
    }
    public function render()
    {
        return view('livewire.admin.group-companies.update', ["groupCompany"=> $this->groupCompany, "companies"=> $this->companies])->layout(\App\View\Components\AdminLayout::class);
    }
 
    public function updateGroup()
    {
        $this->validate();
        $groupCompany = GroupCompanies::findOrFail($this->groupId);
        $groupCompany->name = $this->name;
        $this->groupCompany = $groupCompany;
        $groupCompany->description = $this->description;
        $groupCompany->started_at = $this->started_at;
        $groupCompany->country = $this->country;
        $groupCompany->industry = $this->industry;
        $groupCompany->contact = $this->contact;
        $existingCompany = GroupCompanies::where('name', $this->name)->first();

        if ($existingCompany) {
            session()->flash('error', 'Já existe uma grupo de empresa com esse nome.');
            return;
        }
        try {
            //code...
            $groupCompany->save();
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error',  $th->getMessage());
        }

        $this->emit('success', $this->name .' atualizado com sucesso!');
    }
}
