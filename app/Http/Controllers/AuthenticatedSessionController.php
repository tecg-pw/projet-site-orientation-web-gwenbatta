<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    public function create(string $locale = null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }

        return view('user.login');
    }

    public function store()
    {
        $user = User::where('email',request('email'))
            ->first();
        if (\Hash::check(request('password'),$user->password)){
                \Auth::login($user);
                return Redirect::to('/')->with('success','Vous êtes connecté');
            }
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
