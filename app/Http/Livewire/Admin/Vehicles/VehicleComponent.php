<?php

namespace App\Http\Livewire\Admin\Vehicles;

use App\Models\Activity;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;


class VehicleComponent extends Component
{
    use WithPagination;
   
    protected $listeners = [
        'veiculosAdicionados' => '$refresh',
    ];
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


    public function render()
    {
        $companies = Company::with('veiculos')->get();

        return view('livewire.admin.vehicles.vehicle-component', ['companies' => $companies,'activities' => Activity::search($this->searchField, $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(1),])->layout("layouts.app.base");
    }
}
