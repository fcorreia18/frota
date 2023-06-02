<?php

namespace App\Http\Livewire\Admin\Employees;

use Livewire\Component;
use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ManageEmployee extends Component
{
    use WithPagination;


    public $name;
    public $email;
    public $nif;
    public $address;
    public $contact;
    public $showToast = false;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|string|email',
        'nif' => 'required|string|min:3|max:10',
        'address' => 'required|string|min:4|max:50',
        'contact' => 'required|string|min:9|max:14',
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
        'email.required' => 'O campo de email é obrigatório.',
        'email.email' => 'O campo de email deve ser um endereço de email válido.',
        'nif.required' => 'O campo de NIF é obrigatório.',
        'nif.min' => 'O campo de NIF deve ter pelo menos 3 caracteres.',
        'nif.max' => 'O campo de NIF deve ter no máximo 10 caracteres.',
        'address.required' => 'O campo de endereço é obrigatório.',
        'address.min' => 'O campo de endereço deve ter pelo menos 4 caracteres.',
        'address.max' => 'O campo de endereço deve ter no máximo 50 caracteres.',
        'contact.required' => 'O campo de contato é obrigatório.',
        'contact.min' => 'O campo de contato deve ter pelo menos 9 caracteres.',
        'contact.max' => 'O campo de contato deve ter no máximo 14 caracteres.',
    ];


    public $search;
    public $searchField = "name";
    public $sortField="name";
    public $sortDirection = "asc";

    public function resetSearch(){
        $this->search = "";
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field ? $this->sortDirection = $this->sortDirection === "asc" ? "desc" : "asc" : "asc";


        $this->sortField = $field;
    }

   
    
    public function render()
    {
        // $employees = Employee::with('user')->get();
        // Ou
        $employees = Employee::all()->load('user');
        return view('livewire.admin.employees.index', ['employees' => $employees])->layout(\App\View\Components\AdminLayout::class);
    }





    protected function showToast($type, $message)
    {
        $this->showToast = true;
        $this->dispatchBrowserEvent('show-toast', [
            'type' => $type,
            'message' => $message,
        ]);
    }

    public function store()
    {
        try {
            $this->validate();
            $this->emit('show-success-message', 'A empresa foi cadastrada com sucesso!');

        } catch (\Throwable $th) {
            $this->emit('show-error-message', $th->getMessage());

        }

        
        $this->emit('reset-show-toast');
         // Restante do seu código para o envio do formulário...

    

    }
  








    public function update(Request $request): RedirectResponse #ProfileUpdateRequest $request
    {
        $request->employee()->fill($request->validated());

        if ($request->employee()->isDirty('email')) {
            $request->employee()->email_verified_at = null;
        }

        $request->employee()->save();

        return Redirect::route('admin.employee.edit')->with('status', 'admin.employee-updated');
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
