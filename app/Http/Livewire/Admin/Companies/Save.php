<?php

namespace App\Http\Livewire\Admin\Companies;

use App\Models\Company;
use Livewire\Component;

class Save extends Component
{
    public $name;

    public $email;

    protected $rules = [

        'name' => 'required|string|min:3',
        'email' => 'required|string|email',
        'nif' => 'required|string|email|min:3|max:10',
        'address' => 'required|string|email|min:4|max:50',
        'contact' => 'required|string|email|min:9|max:14',

    ];
    protected $messages = [

        'email.required' => 'The Email Address cannot be empty.',

        'email.email' => 'The Email Address format is not valid.',

    ];

    public function store()
    {
        dd("entrei", $this->validate());

        $this->validate();

        // Execution doesn't reach here if validation fails.

        Company::create([

            'name' => $this->name,

            'email' => $this->email,

        ]);

    }
}
