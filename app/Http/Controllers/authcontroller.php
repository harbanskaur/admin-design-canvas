<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;//class for authentication
use Illuminate\Support\Facades\Session;// inbuild facades
use Illuminate\Support\Facades\Hash; // inbuild facades

class authcontroller extends Controller
{
    public function postLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
    
        // Retrieve the user from the database based on the provided username
        $user = login::where('username', $credentials['username'])->first();
    
        if ($user && $user->password === $credentials['password']) {
            // Authentication successful
            Auth::login($user); // Log in the user
            return redirect()->route('add_page'); // Use the named route 'add_page'
        }
    
        // Authentication failed
        return redirect()->route('login')->withSuccess('Oops! You have entered invalid credentials');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
