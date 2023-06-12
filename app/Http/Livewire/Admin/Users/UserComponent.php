<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Company;
use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;

    public $search;
    public $searchField = "name";
    public $sortField = "name";
    public $sortDirection = "asc";

    protected $listeners = ['resetSearch' => '$refresh','userAdd' => '$refresh', 'userDeleted' => 'resetPagination',];
    public function resetSearch()
    {
        $this->search = "";
        $this->emitSelf('resetSearch');
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field ? $this->sortDirection = $this->sortDirection === "asc" ? "desc" : "asc" : "asc";


        $this->sortField = $field;
    }



    public function render()
    {
        return view('livewire.admin.users.index', ['companies' => Company::get(),'employees' =>  Employee::search($this->searchField, $this->search)->with('user')->orderBy($this->sortField, $this->sortDirection)->paginate(2),])->layout(\App\View\Components\AdminLayout::class);
    }

    public function resetPagination()
    {
        $this->resetPage();
    }
}