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
        $searchTerm = request()->input('search') ?? '';
        $sortStatus = request()->input('status') ?? 'all';
        $sortTags = request()->input('tags') ?? 'all';
        $sortYear = request()->input('year') ?? 'all';

        if ($searchTerm) {
            $comments = Comment::query()
                ->where('comments.content', 'like', '%' . $searchTerm . '%')
                ->join('subjects','subjects.id','=','subject_id')
                ->orWhere('subjects.subject','like', '%' . $searchTerm . '%')
                ->where('comments.user_id',auth()->user()->id)
                ->paginate(3);
        }elseif ($sortStatus === 'all' && $sortTags == 'all' && $sortYear === 'all') {
            $comments = Comment::query()
                ->where('comments.user_id',auth()->user()->id)->paginate(3);
        } //OK
        elseif ($sortYear === 'all' && $sortTags == 'all') {
            $comments = Comment::query()
                ->join('subjects','subjects.id','=','subject_id')
                ->where('resolved', $sortStatus)
                ->where('comments.user_id',auth()->user()->id)
                ->paginate(3);
        } //OK
        elseif ($sortStatus === 'all' && $sortTags == 'all') {
            $comments = Comment::query()
                ->join('subjects','subjects.id','=','subject_id')
                ->where('created_at', $sortYear)
                ->where('comments.user_id',auth()->user()->id)
                ->paginate(3);
        } //OK
        elseif ($sortYear === 'all' && $sortStatus === 'all') {
            $comments = Comment::query()
                ->join('subjects','subjects.id','=','subject_id')
                ->where('tag_id', $sortTags)
                ->where('comments.user_id',auth()->user()->id)
                ->paginate(3);
        } //OK
        elseif ($sortStatus === 'all') {
            $comments = Comment::query()
                ->join('subjects','subjects.id','=','subject_id')
                ->where('tag_id', $sortTags)
                ->where('created_at', $sortYear)
                ->where('comments.user_id',auth()->user()->id)
                ->paginate(3);
        } //OK
        elseif ($sortYear === 'all') {
            $comments = Comment::query()
                ->join('subjects','subjects.id','=','subject_id')
                ->where('tag_id', $sortTags)
                ->where('resolved', $sortStatus)
                ->where('comments.user_id',auth()->user()->id)
                ->paginate(3);
        } //OK
        elseif ($sortTags === 'all') {
            $comments = Comment::query()
                ->join('subjects','subjects.id','=','subject_id')
                ->where('created_at', $sortYear)
                ->where('resolved', $sortStatus)
                ->where('comments.user_id',auth()->user()->id)
                ->paginate(3);
        }
        else{
            $comments = Comment::query()
                ->join('subjects','subjects.id','=','subject_id')
                ->where('resolved', $sortStatus)
                ->where('tag_id', $sortTags)
                ->where('comments.user_id',auth()->user()->id)
                ->where('created_at', $sortYear)
                ->paginate(3);
        }

        $recurrings = Recurring::all();
        //$comments = Comment::where('user_id',auth()->user()->id)->orderBy('created_at')->paginate(8);
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Tag::all();
        $created = Subject::select('created_at')->groupBy('created_at')->get();
        return view('forum.my_talks', compact('recurrings', 'comments', 'latests', 'status', 'tags', 'created', 'ratings'));
    }
}
