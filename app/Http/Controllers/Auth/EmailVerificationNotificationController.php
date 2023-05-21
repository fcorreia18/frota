<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
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

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
