<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{

    public function showloginpage()
    {

        return view('auth.teacher-login');
    }
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (! Auth::guard('teacher')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        // dd(auth()->guard('teacher')->user());
        // return 1;

        return redirect()->route('teacher.dashboard');

    }

    public function logout(Request $request)
    {
        Auth::guard('teacher')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('teacher.login');
    }
}
