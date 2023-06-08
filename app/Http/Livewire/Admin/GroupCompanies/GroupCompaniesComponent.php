<?php

namespace App\Http\Livewire\Admin\GroupCompanies;

use App\Models\Company;
use App\Models\GroupCompanies;
use Livewire\Component;
use Livewire\WithPagination;

class GroupCompaniesComponent extends Component
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

    public function render()
    {
        return view('livewire.admin.group-companies.index',['groupCompanies' => GroupCompanies::search($this->searchField, $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(1),])->layout(\App\View\Components\AdminLayout::class);
    }
}
