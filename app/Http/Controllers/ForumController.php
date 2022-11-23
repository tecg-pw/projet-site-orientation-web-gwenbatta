<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\People;
use App\Models\Recurring;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function indexLatestSubject()
    {
        $recurrings = Recurring::all();
        $subjects = Subject::all();
        $latests = Subject::latest()->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Subject::select('tag')->groupBy('tag')->get();
        $created = Subject::select('created_at')->groupBy('created_at')->get();
        return view('forum.index', compact('recurrings', 'subjects', 'latests', 'status', 'tags', 'created'));
    }
    public function indexLatestAnswer()
    {
        $recurrings = Recurring::all();
        $comments = Comment::latest()->paginate(3);
        $latests = Subject::latest()->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Subject::select('tag')->groupBy('tag')->get();
        $created = Subject::select('created_at')->groupBy('created_at')->get();
        return view('forum.latest_answers', compact('recurrings', 'comments', 'latests', 'status', 'tags', 'created'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $latests = Subject::latest()->take(2)->get();
        return view('forum.show', compact('subject','latests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
