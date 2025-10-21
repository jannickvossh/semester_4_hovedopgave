<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Show home page for user if logged in
        if (Auth::check()) :
            return view('dashboard', [
                'title' => 'Dashboard'
            ]);
        endif;

        // Show promotional front page if not logged in
        return view('frontpage', [
            'title'     => 'Welcome'
        ]);
    }
}
