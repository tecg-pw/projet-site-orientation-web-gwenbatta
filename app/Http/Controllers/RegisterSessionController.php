<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegisterSessionController extends Controller
{
    public function create(string $locale = null)
    {

        return view('user.register');
    }

    public function store(string $locale = null,RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = \Str::slug($validated['firstname'].$validated['name']);
        $validated['status_id'] = 1;
        $validated['password'] = bcrypt($validated['password']);

            $user = User::create($validated);
            \Auth::login($user);
            return redirect('/'.$locale)->with('success', __('home.success_register') . auth()->user()->firstname .' '. auth()->user()->name);

    }
}
