<?php

namespace App\View\Components;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\View\View;
class AppLayout extends Component
{
    public $layout;

    /**
     * Create a new component instance.
     */
    public function __construct($layout = 'app')
    {
        $this->layout = $layout;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        if (Auth::check()) {
            $authLevel = Auth::user()->auth_level;

            if ($authLevel === 'admin') {
                return view('layouts.admin-layout');
            } elseif ($authLevel === 'manager') {
                return view('layouts.manager-layout');
            } elseif ($authLevel === 'employee') {
                return view('layouts.employee-layout');
            }
        }

        return view('layouts.app');
    }
}
