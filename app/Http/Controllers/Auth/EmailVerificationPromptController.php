<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        if ($request->user()->hasVerifiedEmail()) {
            $user = auth()->user();

            if ($user->auth_level === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            } elseif ($user->auth_level === 'manager') {
                return redirect()->intended(route('manager.dashboard'));
            } elseif ($user->auth_level === 'employee') {
                return redirect()->intended(route('employee.dashboard'));
            }
        }

        return view('auth.verify-email');
    }
}
