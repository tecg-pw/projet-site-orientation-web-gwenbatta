<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create(string $locale = null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }

        return view('user.login');
    }

    public function store(LoginRequest $request)
    {
        $validated = $request->validated();

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect('/')->with('success', 'Welcome back, ' . auth()->user()->name);
        }

        return back()
            ->withErrors([
                'email' => trans('auth.failed'),
                'password' => trans('auth.password'),
            ])
            ->withInput();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
