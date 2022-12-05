<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjetTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(string $locale = null)
    {

        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }

        $projects = Project::paginate(9);

        //$projects = ProjetTranslation::latest('date')->where('locale', $locale)->paginate(9);

        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return Application|Factory|View
     */
    public function show(string $locale=null, ProjetTranslation $project)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $projects = ProjetTranslation::where('person_id', $project->person_id)->where('locale',$locale)->orderBy('date')->take(6)->get();

//        foreach ($project->course as $classe){
//        return $classe->translation[0]->person[0]->translation->where('locale', $locale)->first()->firstname;
//        $teachers = Course::find($classe->translation->id)->person()->get();
//    }



        return view('project.single', compact('project', 'projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
