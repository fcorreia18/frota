<?php

namespace App\Http\Livewire\Admin\Employees;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Destroy extends Component
{
    public function render()
    {
        return view('livewire.admin.employees.destroy');
    }

   /**
     * Delete the employee account.
     */
    public function destroy(Request $request): RedirectResponse
    {

        $employee = $request->employee();
        dd($employee);

        $employee->delete();



        return Redirect::route('admin.employees')->with('status', 'admin.employee-deleted');
    }
}
