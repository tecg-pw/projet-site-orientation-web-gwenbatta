<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Subject;

class CommentController extends Controller
{
    public function create(string $locale = null,Subject $subject)
    {
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        return view('forum.show',compact('subject','latests','ratings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(string $locale = null, StoreCommentRequest $request, Subject $subject)
    {
        $data_comment = $request->safe()->only('content');
        $data_comment['slug'] = \Str::slug($data_comment['content']);
        $data_comment['subject_id'] = $subject->id;
        $data_comment['user_id'] = auth()->user()->id;

        $comment = Comment::create($data_comment);


        return  redirect('/'.$locale.'/forum/'.$subject->slug);
    }

    public function update(string $locale = null, StoreCommentRequest $request, $slug ,$id)
    {
        $comment = Comment::find($id);
        $data_comment = $request->safe()->only('content');
        $data_comment['slug'] = \Str::slug($data_comment['content']);
        $comment->update($data_comment);

        return  redirect('/'.$locale.'/forum/'.$slug);

    }

    public function destroy(string $locale = null, $slug , $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return  redirect('/'.$locale.'/forum/'.$slug);
    }
}
