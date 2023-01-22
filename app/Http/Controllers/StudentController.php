<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\PersonTranslation;


class StudentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale=null, PersonTranslation $student)
    {
        $student = People::find($student->people_id);
        $projects =  $student->projects;
        $student = $student->translation->where('locale',$locale)->first();

        return view('bottin.student.name', compact('student', 'projects'));
    }
}
