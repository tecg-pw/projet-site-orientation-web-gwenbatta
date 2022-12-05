<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\CourseTranslation;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale = null, PersonTranslation $teacher)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $teacher = People::find($teacher->people_id);
        $courses = $teacher->courses;
        $teacher = $teacher->translation->where('locale',$locale)->first();


        return view('bottin.teacher.name', compact('teacher','courses'));
    }
}
