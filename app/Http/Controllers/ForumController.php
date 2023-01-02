<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Comment;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Str;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(string $locale = null)
    {
        $tags = Tag::all();

        return view('forum.question', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(string $locale = null, SubjectRequest $request)
    {
        $validatedData = $request->safe()->only('subject', 'description', 'tag_id');
        $validatedData['user_id'] = auth()->id();
        $user = User::find($validatedData['user_id']);
        $validatedData['slug'] = Str::slug($validatedData['subject'] .uuid_create());
        $subject = Subject::create($validatedData);

        return redirect('/' . $locale . '/forum/' . $subject->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale = null, Subject $subject)
    {

        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        return view('forum.show', compact('subject', 'latests', 'ratings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $locale = null, Subject $subject)
    {
        $tags = Tag::all();

        return view('forum.question_modify', compact('tags', 'subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(string $locale = null, Subject $subject, SubjectRequest $request)
    {
        $validatedData = $request->safe()->only('subject', 'description', 'tag_id');
        $validatedData['slug'] = Str::slug($validatedData['subject'].uuid_create());
        $subject->update($validatedData);

        return redirect('/' . $locale . '/forum/' . $subject->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $locale = null, Subject $subject)
    {
        $subject->delete();
        return redirect('/' . $locale . '/forum/index');
    }
}
