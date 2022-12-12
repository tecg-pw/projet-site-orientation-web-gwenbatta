<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\PersonTranslation;

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
        $teacher = People::find($teacher->people_id);
        $courses = $teacher->courses;
        $teacher = $teacher->translation->where('locale',$locale)->first();


        return view('bottin.teacher.name', compact('teacher','courses'));
    }
}
