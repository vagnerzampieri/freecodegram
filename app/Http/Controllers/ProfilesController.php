<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($username)
    {
        $user = User::findByUsername($username);
        $profile = $user->profile;

        return view('profiles.index', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }
}
