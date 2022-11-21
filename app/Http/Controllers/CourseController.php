<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\People;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show (Course $course)
    {;
        $teachers = Course::find($course->id)->person()->get();
        $projects = Course::find($course->id)->projects()->take(3)->get();
        return view('cours.show', compact('course', 'teachers','projects'));
    }
}
