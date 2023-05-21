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
        try {
            $status =   $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Ocorreu um erro durante o registro.');
        }


        $user = User::create([
            'email' => $request->email,
            'auth_level' => $request->auth_level,
            'id_employee' => 1,
            'password' => Hash::make($request->password),
        ]);
        dd($user,  $request);

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

        return redirect()->route($redirectRoute);
    }
}
