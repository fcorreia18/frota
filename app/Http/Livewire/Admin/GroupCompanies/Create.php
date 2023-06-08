<?php

namespace App\Http\Livewire\Admin\GroupCompanies;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.group-companies.create')->layout(\App\View\Components\AdminLayout::class);
    }
}
