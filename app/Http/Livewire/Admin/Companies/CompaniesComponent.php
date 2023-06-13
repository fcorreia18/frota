<?php

namespace App\Http\Livewire\Admin\Companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;


class CompaniesComponent extends Component
{
    use WithPagination;


    public $search;
    public $searchField = "name";
    public $sortField="name";
    public $sortDirection = "asc";

    public function resetSearch(){
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

    public function render()
    {
        return view('livewire.admin.companies.index', ['companies' => Company::search($this->searchField, $this->search)->with('group')->orderBy($this->sortField, $this->sortDirection)->paginate(4),])->layout(\App\View\Components\AdminLayout::class);
    }
  
}
