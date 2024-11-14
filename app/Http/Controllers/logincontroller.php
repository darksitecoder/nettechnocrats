<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(){
        return view('admin/pages/auth/login');
    }

    public function register(){
        return view('admin/pages/auth/register');
    }

    public function signup(Request $request)
    {
        // dd($request->all());
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Hash the password
        ]);

          // Redirect back with success message
    return back()->with('success', 'Account created successfully!');
    }

    public function credentials_check(Request $request)
    {
        //    dd($request->all());
        // Validate the login input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8',
        ]);

        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful, set session
            $user = Auth::user();
            session(['user' => $user]);

            // Redirect to the dashboard or home page with a success message
            return redirect()->to('admin_dashboard')->with('success', 'Welcome back, ' . $user->name . '!');

        }

        // Authentication failed, redirect back with error message
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function destroy(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session to prevent session fixation attacks
        $request->session()->invalidate();

        // Regenerate the session token to prevent session hijacking
        $request->session()->regenerateToken();

        // Redirect the user to the login page with a success message
        return redirect()->to('login')->with('success', 'You have been logged out successfully.');
    }
}
