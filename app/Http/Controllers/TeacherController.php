<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale=null, People $teacher)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        return view('bottin.teacher.name', compact('teacher'));
    }
}
