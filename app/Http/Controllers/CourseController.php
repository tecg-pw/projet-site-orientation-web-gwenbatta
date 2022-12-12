<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTranslation;


class CourseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale = null, CourseTranslation $course)
    {

        $course = Course::find($course->course_id);
        $course = $course->translation->where('locale', $locale)->first();
        $teachers = Course::find($course->course_id)->person;
        $projects = Course::find($course->course_id)->projects->take(3);
        return view('cours.show', compact('course', 'teachers','projects'));
    }
}
