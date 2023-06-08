<?php

namespace App\Http\Livewire\Admin\GroupCompanies;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Update extends Component
{

    public $groupCompany;

    public function render()
    {
        return view('livewire.admin.group-companies.update');
    }


    public function update(Request $request): RedirectResponse #ProfileUpdateRequest $request
    {
        $request->company()->fill($request->validated());

        if ($request->company()->isDirty('email')) {
            $request->company()->email_verified_at = null;
        }

        $request->company()->save();

        return Redirect::route('admin.group_companies.index')->with('status', 'admin.group-company-updated');
    }

}
