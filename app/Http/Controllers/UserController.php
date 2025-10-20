<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('user.register', [
            'title'     => 'Register'
        ]);
    }

    public function store(ValidateUserRequest $request)
    {
        $request->validated();

        $user = new User;

        $user->firstname        = $request->firstname;
        $user->lastname         = $request->lastname;
        $user->email            = $request->email;
        $user->username         = $request->username;
        $user->password         = Hash::make($request->password);
        $user->role_id          = 1;
        $user->remember_token   = Str::random(10);

        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }
}
