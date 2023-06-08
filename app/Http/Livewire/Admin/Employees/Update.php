<?php

namespace App\Http\Livewire\Admin\Employees;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Update extends Component
{
    public $employee;
    public function render()
    {
        // $employees = Employee::all()->load('user');
        return view('livewire.admin.employees.update');
    }


    public function update(Request $request): RedirectResponse #ProfileUpdateRequest $request
    {
        $request->employee()->fill($request->validated());

        if ($request->employee()->isDirty('email')) {
            $request->employee()->email_verified_at = null;
        }

        $request->employee()->save();

        return Redirect::route('admin.employee.index')->with('status', 'admin.employee-updated');
    }
}
