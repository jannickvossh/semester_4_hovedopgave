<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function selectLocale($locale)
    {
        App::setLocale($locale);
        Session::put('locale', $locale);

        if (Auth::check()) :
            $user = User::where('id', Auth::user()->id)->first();

            $user->locale = Session::get('locale');
            $user->save();
        endif;

        return redirect()->back();
    }
}
