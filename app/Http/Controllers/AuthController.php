<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('form.auth.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function register()
    {
        return view('form.auth.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // Check if there are any existing users
        $userCount = User::count();

        // If there are no existing users, proceed with storing the new user
        if ($userCount === 0) {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|max:255|min:3|unique:users',
                'email' => 'required|unique:users|email:dns',
                'password' => 'required|max:255|min:5'
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);

            User::create($validatedData);

            return redirect('/login')->with('success', 'Registered successfully! Please login');
        } else {
            // If there are existing users, do not store the new user
            return redirect()->back()->with('error', 'User already exists. Cannot register new user.');
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/dashboard')->with('success', 'User has been deleted!');
    }

    public function edit(Request $request, $id){
        $rules = [
            'name' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        User::where('id', $id)->update($validatedData);
        return redirect('/dashboard')->with('success', 'User Data changed successfully!');
    }
}
