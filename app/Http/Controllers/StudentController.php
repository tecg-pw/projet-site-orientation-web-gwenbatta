<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Project;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale=null, People $student)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $projects = Project::where('person_id', $student->id)->orderBy('date')->take(6)->get();
        return view('bottin.student.name', compact('student', 'projects'));
    }
}
