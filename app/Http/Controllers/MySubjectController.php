<?php

namespace App\Http\Controllers;

use App\Models\Recurring;
use App\Models\Subject;
use Illuminate\Http\Request;

class MySubjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recurrings = Recurring::all();
        $subjects = Subject::paginate(8);
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Subject::select('tag')->groupBy('tag')->get();
        $created = Subject::select('created_at')->groupBy('created_at')->get();
        return view('forum.my_subject', compact('recurrings', 'subjects', 'latests', 'status', 'tags', 'created', 'ratings'));
    }
}
