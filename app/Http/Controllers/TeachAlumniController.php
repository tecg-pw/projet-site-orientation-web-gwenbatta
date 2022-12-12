<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\ProjetTranslation;

class TeachAlumniController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale=null, PersonTranslation $teachalumni)
    {

        $teachalumni = People::find($teachalumni->people_id);
        $courses = $teachalumni->courses;
        $teachalumni = $teachalumni->translation->where('locale',$locale)->first();

        $projects = ProjetTranslation::where('person_id', $teachalumni->people_id)->where('locale',$locale)->orderBy('date')->take(6)->get();


        //return $teachalumni->id;
        return view('bottin.teachalumni.name', compact('teachalumni', 'projects','courses'));
    }
}
