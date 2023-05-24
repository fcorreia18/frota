<?php

namespace App\Http\Livewire\Admin\Companies;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

   
   
    public $search;

    public function render()
    {
        return view('livewire.admin.companies.index',['companies' => Company::search('name', $this->search)->paginate(10),])->layout(\App\View\Components\AdminLayout::class);
    }



    public function save(){

    }
       /**
     * Display the company profile form.
     */
    public function edit(Request $request)
    {
        return view('admin.company.edit', [
            'company' => $request->company(),
        ]);
    }

    public function update(Request $request): RedirectResponse #ProfileUpdateRequest $request
    {
        $request->company()->fill($request->validated());

        if ($request->company()->isDirty('email')) {
            $request->company()->email_verified_at = null;
        }

        $request->company()->save();

        return Redirect::route('admin.company.edit')->with('status', 'admin.company-updated');
    }

 /**
     * Delete the company account.
     */
    public function destroy(Request $request): RedirectResponse
    {
       
        $company = $request->company();

        Auth::logout();

        $company->delete();

      

        return Redirect::route('admin.companies')->with('status', 'admin.company-deleted');
    }

    
}
