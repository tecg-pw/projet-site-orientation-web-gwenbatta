<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\Project;
use App\Models\ProjetTranslation;
use Illuminate\Http\Request;

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
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $student = People::find($student->people_id);
        $student = $student->translation->where('locale',$locale)->first();

        $projects = ProjetTranslation::where('person_id', $student->people_id)->where('locale',$locale)->orderBy('date')->take(6)->get();
        return view('bottin.student.name', compact('student', 'projects'));
    }
}
