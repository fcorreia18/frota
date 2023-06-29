<?php

namespace App\Http\Livewire\Manager\Maintenances;

use App\Models\Maintenance;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;


    public $search;
    public $searchField = "ref";
    public $sortField = "ref";
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

    public function render()
    {
        return view('livewire.manager.maintenances.index', ['companies' => Maintenance::search($this->searchField, $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(4),])->layout("layouts.app.base");
    }
}
