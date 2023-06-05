<?php

namespace App\Http\Livewire\Admin\Companies;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Destroy extends Component
{
    public function render()
    {
        return view('livewire.admin.companies.destroy');
    }

      /**
     * Delete the company account.
     */
    public function destroy(Request $request): RedirectResponse
    {

        $company = $request->company();
        dd($company);

        $company->delete();



        return Redirect::route('admin.companies')->with('status', 'admin.company-deleted');
    }
}
