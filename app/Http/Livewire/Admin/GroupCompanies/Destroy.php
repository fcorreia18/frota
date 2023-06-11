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
        $this->emit('info',  "infoss");

        // $groupCompany = GroupCompanies::findOrFail($id);
        // dd($groupCompany);
        // try {
        //     $groupCompany->delete();
        // } catch (\Throwable $th) {
        //     session()->flash('error', $th->getMessage());
        //     $this->emit('error',  $th->getMessage());
        //     return;
        // }

        // session()->flash('message', 'Grupo de empresas excluído com sucesso!');
        // $this->emit('groupDeleted');
    }
}
