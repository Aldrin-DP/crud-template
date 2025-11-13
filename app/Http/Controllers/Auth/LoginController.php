<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(Request $request) {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();
            
            if ($user->role === 'admin'){
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home');
        }

        return back()
            ->onlyInput('email')
            ->withErrors([
                'email' => 'The credentials you provided is incorrect.'
            ]);
    }

}
