<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $status =   $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        dd($status);
        exit;
        $user = User::create([
            'email' => $request->email,
            'auth_level' => $request->auth_level,
            'id_employee' => 1,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $redirectRoute = '';

        if ($user->auth_level === 'admin') {
            $redirectRoute = 'admin.dashboard';
        } elseif ($user->auth_level === 'manager') {
            $redirectRoute = 'manager.dashboard';
        } elseif ($user->auth_level === 'employee') {
            $redirectRoute = 'employee.dashboard';
        }
dd($request);
die;
        return redirect()->route($redirectRoute);
    }
}
