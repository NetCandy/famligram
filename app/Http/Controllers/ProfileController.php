<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($profile)
    {
        $user = User::where('name', $profile)->first() ?? abort(404);

        return view('profile.index')->with('user', $user);
    }
}
