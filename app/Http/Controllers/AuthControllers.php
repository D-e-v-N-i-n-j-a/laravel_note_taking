<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControllers extends Controller


{

    // REGISTER FUNCTIONS
    public function register(Request $request)
    {
    // VALIDATE INPUTS

   $fields =  $request->validate([
        'username'=>['required'],
        'email'=>['required','max:255','email','unique:users'],
        'password'=>['required','min:4','confirmed']
    ]);


    // REGISTER USER
   $user = User::create($fields);


    // REDIRECT USER TO DASHBOARD 
    return redirect()->route('login');
    }


    // LOGIN FUNCTION
    public function login(Request $request)
    {
      $fields = $request->validate([
        'email'=>['required','email'],
        'password'=>['required']
      ]);

        if (Auth::attempt($fields,$request->remember)) {
            return redirect()->route('home');
        }else{
            return back()->withErrors([
                'failed'=>'The provided credentials do not match our records'
            ]);
        }
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); 

         


    }
}
