<?php

namespace App\Http\Controllers;

use App\Models\Course;


class CourseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show (string $locale = null, Course $course)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $teachers = Course::find($course->id)->where('locale',$locale)->person()->get();
        $projects = Course::find($course->id)->where('locale',$locale)->projects()->take(3)->get();
        return view('cours.show', compact('course', 'teachers','projects'));
    }
}
