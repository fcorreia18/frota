<?php

namespace App\Http\Livewire\Admin\GroupCompanies;

use Livewire\Component;
use App\Models\GroupCompanies;

class Destroy extends Component
{
    public $groupCompany;
    public function render()
    {
        return view('livewire.admin.group-companies.destroy');
    }
    public function destroy($id)
    {

        $groupCompany = GroupCompanies::findOrFail($id);
        $name = $groupCompany->name;
        try {
            $groupCompany->delete();
        } catch (\Throwable $th) {
            $this->emit('error',  $th->getMessage());
            return;
        }
        $this->emit('info',  $name.' excluído com sucesso!');
        $this->emit('groupDeleted');
    }
}
