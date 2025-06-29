<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Log the admin user in.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAsAdmin()
    {
        // If a user is already logged in, log them out first.
        if (Auth::check()) {
            Auth::logout();
        }

        $admin = User::where('email', 'admin@example.com')->first();

        if ($admin) {
            Auth::login($admin);
            request()->session()->regenerate();
            return redirect()->route('contacts.index')->with('success', 'Logged in as Admin successfully.');
        }

        return redirect()->route('contacts.index')->with('error', 'Admin user not found. Please run database seeders.');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
