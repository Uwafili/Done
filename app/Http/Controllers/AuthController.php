<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required|max:255',
            'password' =>'required|min:8|confirmed|string',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|max:255|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $fields['email'], 'password' => $fields['password']], $request->remember)) {
            return redirect('/dashboard')->intend('dashboard');
        } else {
            return back()->withErrors([
                'failed' => 'This User Information Does Not Match'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
