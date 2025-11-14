<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit() {

        $user = auth()->user();

        $profile = Profile::where('user_id', $user->id)->get();

        return view('profile.edit', compact('profile'));
    }
}
