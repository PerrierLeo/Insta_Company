<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;


class ProfileController extends Controller
{

    public function show($username)
    {
        $user = User::where('username', $username)->first();
        return view('profiles.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        //protection via policy
        $this->authorize('update', $user->profile);
        return view('profiles.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        //protection via policy
        $this->authorize('update', $user->profile);
        $data =  request()->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|url',
            'image' => 'sometimes|image|max:3000'

        ]);
        // merge fusionne deux tableaux
        if (request('image')) {
            $imagePath = request('image')->store('avatar', 'public');
            auth()->user()->profile->update(array_merge(
                $data,
                ['image' => $imagePath]
            ));
        }

        auth()->user()->profile->update($data);

        return redirect()->route('profiles.show', ['user' => $user]);
    }
}
