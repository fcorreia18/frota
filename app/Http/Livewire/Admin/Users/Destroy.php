<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Employee;
use Livewire\Component;

class Destroy extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.users.destroy');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $name = $employee->name;
        try {
            $employee->delete();
        } catch (\Throwable $th) {
            $this->emit('error',  $th->getMessage());
            return;
        }
        $this->emit('info',  $name.' excluído com sucesso!');
        $this->emit('groupDeleted');
    }
}
