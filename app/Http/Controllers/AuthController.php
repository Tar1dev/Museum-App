<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_index(Request $request) {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('index');
        }

        $loginFailedMessage = "Wrong username or password";
        return view('auth.login', compact('loginFailedMessage'));
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
