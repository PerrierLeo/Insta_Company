<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        dd($user);
    }
}
