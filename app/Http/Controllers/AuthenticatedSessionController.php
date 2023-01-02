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

    public function store(string $locale = null,LoginRequest $request)
    {
        $validated = $request->validated();

        if (auth()->attempt($validated, $request['remember']==='on')) {
            request()->session()->regenerate();
            return redirect('/'.$locale)->with('success', __('home.success_login') . auth()->user()->firstname .' '. auth()->user()->name);
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
