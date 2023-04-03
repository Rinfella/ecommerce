<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->except(['_token']))) {
            if ($request->expectsJson()) {
                return [
                    'user' => Auth::user(),
                ];
                // Auth::user();
            }
            return redirect('/admin');
        }
        if ($request->expectsJson()) {
            throw ValidationException::withMessages(['email' => 'Email/password combination not found']);
        }
        // return response([
        //     'message' => ''
        // ])
        return redirect('/login')->with('message', 'Email/password combination is invalid');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in successfully');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');
    }
}
