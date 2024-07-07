<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function AuthLoginView()
    {
        return view('auth.login');
    }

    public function AuthLoginCreation(Request $request)
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
}
