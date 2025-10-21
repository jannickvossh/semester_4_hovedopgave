<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidateSessionRequest;

class SessionController extends Controller
{
    public function login()
    {
        return view('session.login', [
            'title'     => 'Log in'
        ]);
    }

    public function authenticate(ValidateSessionRequest $request)
    {
        $userInput = $request->validated();

        $attempt = [
            'username' => $userInput['username'],
            'password' => $userInput['password']
        ];

        if (Auth::attempt($attempt)) :
            return redirect()->route('home');
        endif;

        return back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
