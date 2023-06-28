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

    protected $listeners = ['resetSearch' => '$refresh', 'searchValueChanged'=>'searchValueChanged','userAdd' => '$refresh','userUpdated' => '$refresh', 'userDeleted' => 'resetPagination',];
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
        return view('livewire.admin.users.index', ['companies' => Company::get(),'employees' =>  Employee::search($this->searchField, $this->search)->with('user')->orderBy($this->sortField, $this->sortDirection)->paginate(2),])->layout("layouts.app.base");
    }


    public function searchValueChanged()
    {
        // Aqui você pode executar a lógica desejada quando o valor do campo search mudar
        // Por exemplo, você pode fazer uma consulta no banco de dados ou executar qualquer outra ação necessária
        // Exemplo de código:
        $this->resetPagination();
    }
    public function scripts()
{
    return <<<JS
        Livewire.on('searchValueChanged', () => {
            @this.call('resetPage');
        });
    JS;
}

    public function resetPagination()
    {
        $this->resetPage();
    }
}
