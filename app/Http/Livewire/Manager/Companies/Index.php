<?php

namespace App\Http\Livewire\Manager\Companies;

use App\Models\Company;
use Livewire\Component;
use App\Models\Employee;
use App\Models\GroupCompanies;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public object $groupCompany;
    public $search;
    public $searchField = "name";
    public $sortField = "name";
    public $sortDirection = "asc";

    public function resetSearch()
    {
        $this->search = "";
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field ? $this->sortDirection = $this->sortDirection === "asc" ? "desc" : "asc" : "asc";


        $this->sortField = $field;
    }

    protected $listeners = [
        'companiesAdd' => '$refresh',
    ];

    public function mount()
    {
        $userCompany = Auth::user()->employee->company;
        $groupCompany = $userCompany->group;
        $this->groupCompany = $groupCompany;
      
        }
    public function render()
    {
        return view('livewire.manager.companies.index', ['companies' => Company::search($this->searchField, $this->search)->where("id_group_company", $this->groupCompany->id )->orderBy($this->sortField, $this->sortDirection)->paginate(1),])->layout("layouts.app.base");
    }
}
