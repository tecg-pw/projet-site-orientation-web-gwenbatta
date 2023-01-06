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
        $projects = $teachalumni->projects;
        $courses = $teachalumni->courses;
        $teachalumni = $teachalumni->translation->where('locale',$locale)->first();


        return view('bottin.teachalumni.name', compact('teachalumni', 'projects','courses'));
    }
}
