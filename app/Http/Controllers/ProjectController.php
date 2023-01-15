<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
        $searchTerm = request()->input('search') ?? '';
        $ids = [];
        if ($searchTerm) {
            $references = ProjetTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('title', 'like', '%' . $searchTerm . '%')
                        ->orWhere('date', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($references as $reference) {
                $ids [] = $reference->project_id;
            }
            $projects = Project::whereIn('id', $ids)->paginate(9);

        }
        else{
        $projects = Project::paginate(9);
        }

        return view('project.index', compact('projects'));
    }

    public function ajax(string $locale = null){
        $ids = [];
        $searchTerm = request()->input('search') ?? '';
        $references = ProjetTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('date', 'like', '%' . $searchTerm . '%');
            })->get();

        foreach ($references as $reference) {
            $ids [] = $reference->project_id;
        }
        $projects = Project::whereIn('id', $ids)->paginate(2);
        return view('components.container_project', compact('projects'));
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
     *·
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
        $locales = [];

        $project = Project::find($project->project_id);
        $course  = $project->course;
        $person = $project->person;
        foreach ($project->translation as $projet_ref){
            $locales[] = $projet_ref->locale;
        }

        $projects = $person->projects->where('id','!=', $project->id)->take(6);

        $project = $project->translation->where('locale',$locale)->first();


        foreach ($course as $classe){
        $teachers = Course::find($classe->translation->where('locale',$locale)->first()->course_id)->person()->get();
    }

        return view('project.single', compact('project', 'person', 'projects','teachers','locales','course'));
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
