<?php

namespace App\Http\Livewire\Admin\Employees;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class EmployeeComponent extends Component
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
        // $employees = Employee::with('user')->get();
        // Ou
        // $employees = Employee::all()->load('user');
        return view('livewire.admin.employees.index', ['employees' =>  Employee::search($this->searchField, $this->search)->with('user')->orderBy($this->sortField, $this->sortDirection)->paginate(1),])->layout(\App\View\Components\AdminLayout::class);
    }
}
