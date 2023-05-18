<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDashboardComponent extends Component
{

    public $count = 0;
    public $post = "testando";

    public function increment()
    {

        $this->count++;
    }

    
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.admin.base');
    }
}
