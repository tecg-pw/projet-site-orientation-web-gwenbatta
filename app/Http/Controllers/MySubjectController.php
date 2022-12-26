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
        $searchTerm = request()->input('search') ?? '';
        $sortStatus = request()->input('status') ?? 'all';
        $sortTags = request()->input('tags') ?? 'all';
        $sortYear = request()->input('year') ?? 'all';
        

        //OK
        if ($searchTerm) {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('subject', 'like', '%' . $searchTerm . '%')
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all' && $sortTags == 'all' && $sortYear === 'all') {

            $subjects = Subject::query()->where('user_id',auth()->user()->id)->paginate(8);
        } //OK
        elseif ($sortYear === 'all' && $sortTags == 'all') {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all' && $sortTags == 'all') {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('created_at', $sortYear)
                ->paginate(8);
        } //OK
        elseif ($sortYear === 'all' && $sortStatus === 'all') {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('tag_id', $sortTags)
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all') {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('tag_id', $sortTags)
                ->where('created_at', $sortYear)
                ->paginate(8);
        } //OK
        elseif ($sortYear === 'all') {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('tag_id', $sortTags)
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } //OK
        elseif ($sortTags === 'all') {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('created_at', $sortYear)
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } elseif ($searchTerm === '') {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)->paginate(8);
        } //OK
        else {
            $subjects = Subject::query()->where('user_id',auth()->user()->id)
                ->where('resolved', $sortStatus)
                ->where('tag_id', $sortTags)
                ->where('created_at', $sortYear)
                ->paginate(8);
        }
        $recurrings = Recurring::all();
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Tag::all();
        $created = Subject::select('created_at')->groupBy('created_at')->get();

        return view('forum.my_subject', compact('recurrings', 'subjects', 'latests', 'status', 'tags', 'created', 'ratings'));
    }
}
