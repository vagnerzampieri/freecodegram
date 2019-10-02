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

        $this->authorize('update', $profile);

        return view('profiles.edit', compact('user', 'profile'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
