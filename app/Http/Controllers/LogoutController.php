<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
