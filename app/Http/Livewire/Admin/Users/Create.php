<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;


use Livewire\Component;
use App\Models\Employee;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmployeeRegisteredNotification;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.users.create');
    }

    public $name;
    public $id_number;
    public $driver_license;
    public $license_due_date;
    public $address;
    public $contact;

    public $email;

    public $companies;
    public $companyId;

    public $showForm = false;
    public $errors = [];
    protected $rules = [
        'name' => 'required|string|min:3|max:50',
        'id_number' => 'required|string|min:3|max:50',
        'driver_license' => 'required|string|min:5|max:12',
        'contact' => 'required|string|min:9|max:15',
        'address' => 'required|string|min:4|max:100',
        'email' => 'required|email',
    ];

    protected $messages = [
        'name.required' => 'O campo de nome é obrigatório.',
        'name.min' => 'O campo de nome deve ter pelo menos 3 caracteres.',
        'name.max' => 'O campo de nome deve no máximo 50 caracteres.',
        'email.required' => 'O campo de email é obrigatório.',
        'address.required' => 'O campo de endereço é obrigatório.',
        'address.min' => 'O campo de endereço deve ter pelo menos 4 caracteres.',
        'address.max' => 'O campo de endereço deve ter no máximo 100 caracteres.',
        'id_number.required' => 'O campo de Nº de Identificação é obrigatório.',
        'id_number.min' => 'O campo de Nº de Identificação deve ter pelo menos 3 caracteres.',
        'id_number.max' => 'O campo de Nº de Identificação deve no máximo 50 caracteres.',
        'contact.required' => 'O campo de contacto é obrigatório.',
        'contact.min' => 'O campo de contacto deve ter pelo menos 9 caracteres.',
        'contact.max' => 'O campo de contacto deve no máximo 12 caracteres.',
        'driver_license.required' => 'O campo de data de Constituição é obrigatório.',
        'driver_license.min' => 'O campo de Nº da carta deve ter pelo menos 3 caracteres.',
        'driver_license.max' => 'O campo de Nº da carta deve no máximo 12 caracteres.',


    ];
    private function resetFields()
    {
        $this->name = '';
        $this->address = "";
        $this->driver_license = "";
        $this->id_number = "";
        $this->contact = "";
        $this->license_due_date = "";
        $this->email = "";
        $this->companyId = "";
    }
    public function addUser()
    {
        try {
            $existingUser = User::where('email', $this->email)->first();
            Notification::send($existingUser, new EmployeeRegisteredNotification("url"));
            session()->flash('error', 'enviado');
            //     return;
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
       

        }
           
        // $this->validate();

        // $existingUser = User::where('email', $this->email)->first();

        // if ($existingUser) {
        //     session()->flash('error', 'Já existe um usuário com este email.');
        //     return;
        // }
        // try {
        //     $userCreated = Employee::create([
        //         'name' => $this->name,
        //         'id_number' => $this->id_number,
        //         'address' => $this->address,
        //         'contact' => $this->contact,
        //         'driver_license' => $this->driver_license,
        //         'license_due_date' => $this->license_due_date,
        //         'id_company' => $this->companyId,
        //     ]);

        // } catch (\Throwable $th) {
        //     array_push($this->errors, $th->getMessage());
        //     session()->flash('error',  $th->getMessage());
        // }
        // // dd("funcionario");

        // try {

        //     //pesquisar se email já foi cadastrado depois cadastar utilizador!

        //     $user = User::create([
        //         'email' => $this->email,
        //         'password' => Hash::make($this->driver_license),
        //         'id_employee' => $userCreated->id,
        //     ]);
        //     // dd("user 1");

        //     $token = $user->generateToken();

        //     $resetPasswordUrl = route('password.reset', ['token' => $token]);

        //     Notification::send($user, new EmployeeRegisteredNotification($resetPasswordUrl));
        //     // Redirecionar para a rota desejada
        //     // ...
        // // dd("user 2");
        // $this->emit('userAdd', 'utilizador cadastrado com sucesso!');


        // } catch (\Throwable $th) {
        //     session()->flash('error', 'Ocorreu um erro durante o registro de acesso do utilizador');
        //     return;

        // }

        // $this->resetFields();
        // // Disparar o evento para atualizar a lista de grupo de empresas
        // $this->emit('userAdd', 'utilizador cadastrado com sucesso!');
    }

    protected $listeners = ['toggleForm'];
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }
}
