<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    //
    public function AuthLoginView()
    {
        return view('auth.login');
    }
    public function AuthRegisterView()
    {
        return view('auth.register');
    }

    public function AuthLoginCreation(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            // return redirect('home');
            return redirect('/');
        } else {
            Session::flash('error', "Email atau Password salah!");
            return redirect('login')->withErrors('Email atau Password salah!');
        }
    }

    public function AuthRegisterCreation(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email:dns',
            'password' => 'required|string|min:5'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return to_route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
