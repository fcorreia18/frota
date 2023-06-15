<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(Request $request): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();

            $request->session()->regenerate();

            $user = auth()->user();
            switch ($user->auth_level) {
                case 'admin':
                    return redirect()->intended(route('admin.dashboard'));
                    break;
                case 'manager':
                    return redirect()->intended(route('manager.dashboard'));
                    break;
                case 'fleet_manager':
                    return redirect()->intended(route('fleet_manager.dashboard'));
                    break;
                case 'employee':
                    return redirect()->intended(route('employee.dashboard'));
                    break;
                default:
                    return redirect()->back()->with('error', "INDISPONÍVEL");
                    break;
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th . " erro ao logar");
            //throw $th;
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
