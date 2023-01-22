<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Opportunity;
use App\Models\People;
use App\Models\PersonTranslation;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $locale = null)
    {

        $ids = [];
        $jobs = Opportunity::all();
        $references = PersonTranslation::all();
        foreach ($references as $reference) {
            if ($reference->isTeacher){
                $ids [] = $reference->people_id;
            }
        }
        $teachers = People::whereIn('id', $ids)->paginate(8);
        $courses = Course::all();

        return view('about', compact('jobs', 'teachers', 'courses'));
    }

}
