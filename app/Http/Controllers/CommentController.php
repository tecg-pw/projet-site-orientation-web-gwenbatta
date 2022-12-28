<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeCommentRequest;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Subject;
use App\Notifications\AnswerSubject;
use DB;
use Illuminate\Support\Facades\Notification;

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
        Notification::send($subject->user, new AnswerSubject());

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


    public function like(string $locale = null, LikeCommentRequest $request, $slug ,$id)
    {

        $data_comment = $request->safe()->only('like');
        $data_comment['comment_id'] = $id;
        $data_comment['user_id'] = auth()->user()->id;

        if (DB::table('comment_user')->where('comment_id', $id)->where('user_id', auth()->user()->id)->count() > 0) {
            DB::table('comment_user')->where('comment_id', $id)->where('user_id', auth()->user()->id)->delete();
        }else {
            DB::table('comment_user')->insert([
                "comment_id" => $data_comment['comment_id'],
                "user_id" => $data_comment['user_id']
            ]);
        }



        return  redirect('/'.$locale.'/forum/'.$slug);

    }
}
