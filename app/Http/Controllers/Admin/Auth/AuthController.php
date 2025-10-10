<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function AdminLogin(Request $request)
    {
         // Validate input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        // Try to authenticate as admin
        // if (Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {
        if (Auth::guard('admin')->attempt($credentials)) {
            // Regenerate session to prevent fixation
            $request->session()->regenerate();

            // Redirect to admin dashboard
            return redirect()->intended('/admin/dashboard');
        }

        // If login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
