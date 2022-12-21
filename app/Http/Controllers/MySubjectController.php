<?php

namespace App\Http\Controllers;

use App\Models\Recurring;
use App\Models\Subject;
use App\Models\Tag;

class MySubjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale=null)
    {

        $recurrings = Recurring::all();
        $subjects = Subject::where('user_id',auth()->user()->id)->paginate(8);
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Tag::all();
        $created = Subject::select('created_at')->groupBy('created_at')->get();
        return view('forum.my_subject', compact('recurrings', 'subjects', 'latests', 'status', 'tags', 'created', 'ratings'));
    }
}
