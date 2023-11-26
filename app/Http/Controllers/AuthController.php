<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function loginStore(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if(Auth()->user()->role_id == 1){
                $request->session()->regenerate();
                return redirect()->intended('dashboard/admin/dashboard');
            }elseif(Auth()->user()->role_id == 2){
                $request->session()->regenerate();
                return redirect()->intended('society/form-complaint');
            }elseif(Auth()->user()->role_id == 3){
                $request->session()->regenerate();
                return redirect()->intended('dashboard/leader/dashboard');
            }
        }
        return back()->with(['error' => 'Login failed!',]);

    }

    public function register(){
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }
}
