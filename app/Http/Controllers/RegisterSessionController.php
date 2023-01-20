<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Uploads\HandlesBackImagesUploads;
use App\Http\Uploads\HandlesImagesUploads;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegisterSessionController extends Controller
{
    use HandlesImagesUploads, HandlesBackImagesUploads;
    public function create(string $locale = null)
    {

        return view('user.register');
    }

    public function store(string $locale = null,RegisterRequest $request)
    {

        $validated = $request->validated();
        $validated['slug'] = \Str::slug($validated['firstname'].$validated['name']);
        $validated['status_id'] = 1;
        $validated['newsletter'] = 0;

        if ($validated['newsletter'] === 'on'){
            $validated['newsletter'] = 1;
        }
        $validated['password'] = password_hash($validated['password'],PASSWORD_DEFAULT);

            $user = User::create($validated);
            \Auth::login($user);
            return redirect('/'.$locale)->with('success', __('home.success_register') . auth()->user()->firstname .' '. auth()->user()->name);

    }
}
