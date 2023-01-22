<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $locale = null)
    {

        $subjects = Subject::orderBy('created_at','DESC')->take(5)->get();
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $projects = Project::take(3)->get();
        return view('home', compact('projects','ratings','latests','subjects'));
    }

}
