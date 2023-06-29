<?php

namespace App\Http\Livewire\Manager\Employees;

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
    public $employees = [];

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
        'employeeAdd' => '$refresh',
    ];

    public function mount()
    {
        $userCompany = Auth::user()->employee->company;
        $groupCompany = $userCompany->group;
        $this->groupCompany = $groupCompany;
        $companies =  GroupCompanies::search($this->searchField, $this->search)->where("id", $this->groupCompany->id)->get();
        foreach ($groupCompany->companies as $companies) {
            array_push($this->employees, $companies->employees);
        }
        
    }
    public function render()
    {
        return view('livewire.manager.employees.index', ['employees' => $this->employees])->layout("layouts.app.base");
    }
}
