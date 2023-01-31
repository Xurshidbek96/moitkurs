<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use Illuminate\Validation\ValidationException;

class ClientController extends Controller
{
    public function showRegisterPage()
    {
        return view('auth.client-register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('client')->login($user);

        return redirect()->route('client.dashboard');
    }

    public function showLoginPage()
    {
        return view('auth.client-login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (! Auth::guard('client')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        return redirect()->route('client.dashboard');

    }

    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('client.login');
    }
}
