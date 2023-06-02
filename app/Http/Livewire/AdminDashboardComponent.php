<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDashboardComponent extends Component
{


    public function total(){
        return 3;
    }

    
    public function render()
    {
        return view('livewire.admin.dashboard-component', [

            'total_empresas' => 12,#Post::all()
            'total_funcionarios' => 12,#Post::all()

        ])->layout(\App\View\Components\AdminLayout::class);
    }
}
