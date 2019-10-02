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

        return view('profiles.index', compact('user', 'profile'));
    }

    public function edit($username)
    {
        $user = User::findByUsername($username);
        $profile = $user->profile;

        return view('profiles.edit', compact('user', 'profile'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        $user->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
