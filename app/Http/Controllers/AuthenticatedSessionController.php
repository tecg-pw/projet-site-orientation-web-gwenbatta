<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    public function create(string $locale = null)
    {

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
