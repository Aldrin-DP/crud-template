<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
            
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[\pL\s\'\-]+$/u'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5', 'confirmed']
        ]);
        $validated['password'] = Hash::make($validated['password']);
    
        User::create($validated);

        return redirect()->route('login');
    }
}
