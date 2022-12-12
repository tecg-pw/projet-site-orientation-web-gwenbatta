<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Recurring;
use App\Models\Subject;
use App\Models\Tag;

class MyAnswerController extends Controller
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
        $comments = Comment::latest()->paginate(3);
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Tag::all();
        $created = Subject::select('created_at')->groupBy('created_at')->get();
        return view('forum.my_talks', compact('recurrings', 'comments', 'latests', 'status', 'tags', 'created', 'ratings'));
    }
}
