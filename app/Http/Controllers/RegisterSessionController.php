<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterSessionController extends Controller
{
    public function create(string $locale = null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }

        return view('user.register');
    }

    public function store()
    {

        $firstname = \request('firstname');
        $name = \request('name');
        $email = \request('email');
        $password = \request('password');
        $user = User::create([
            'name' => $name,
            'firstname' => $firstname,
            'slug' => \Str::slug(\request('name').\request('surname')),
            'email' => $email,
            'isAdmin' => false,
            'password' => bcrypt($password),
        ]);
        \Auth::login($user);
        return Redirect::to('/')->with('success','Vous êtes connecté');

    }
}
