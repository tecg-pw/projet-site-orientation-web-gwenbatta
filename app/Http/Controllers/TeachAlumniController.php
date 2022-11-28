<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Project;
use Illuminate\Http\Request;

class TeachAlumniController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale=null, People $teachalumni)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $projects = Project::where('person_id', $teachalumni->id)->orderBy('date')->take(6)->get();
        return view('bottin.teachalumni.name', compact('teachalumni', 'projects'));
    }
}
