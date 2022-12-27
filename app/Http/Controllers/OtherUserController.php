<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OtherUserController extends Controller
{
    public function show(string $locale=null, User $user)
    {
        $tutos = User::find($user->id)->tutos()->get();
        $subjects =  User::find($user->id)->subjects()->get();
        if (auth()->user() !== null){
            if ($user->slug === auth()->user()->slug){
                return redirect('/'.$locale.'/user/profile');
            }
        }
        return view('user.other_profile', compact('user', 'tutos','subjects'));
    }
}
