<?php

namespace App\Http\Livewire\Admin\Projects;

use Livewire\Component;
use App\Models\Activity;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;



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
        return view('livewire.admin.projects.index', ['activities' => Activity::search($this->searchField, $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(1),])->layout("layouts.app.base");
    }
}
