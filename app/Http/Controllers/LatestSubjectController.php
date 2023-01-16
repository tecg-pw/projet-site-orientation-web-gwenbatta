<?php

namespace App\Http\Controllers;

use App\Models\Recurring;
use App\Models\Subject;
use App\Models\Tag;

class LatestSubjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $sortStatus = request()->input('status') ?? 'all';
        $sortTags = request()->input('tags') ?? 'all';
        $sortYear = request()->input('year') ?? 'all';

        if ($searchTerm) {
            $subjects = Subject::query()
                ->where('subject', 'like', '%' . $searchTerm . '%')
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all' && $sortTags == 'all' && $sortYear === 'all') {
            $subjects = Subject::query()->paginate(8);
        } //OK
        elseif ($sortYear === 'all' && $sortTags == 'all') {
            $subjects = Subject::query()
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all' && $sortTags == 'all') {
            $subjects = Subject::query()
                ->where('created_at', $sortYear)
                ->paginate(8);
        } //OK
        elseif ($sortYear === 'all' && $sortStatus === 'all') {
            $subjects = Subject::query()
                ->where('tag_id', $sortTags)
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all') {
            $subjects = Subject::query()
                ->where('tag_id', $sortTags)
                ->where('created_at', $sortYear)
                ->paginate(8);
        } //OK
        elseif ($sortYear === 'all') {
            $subjects = Subject::query()
                ->where('tag_id', $sortTags)
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } //OK
        elseif ($sortTags === 'all') {
            $subjects = Subject::query()
                ->where('created_at', $sortYear)
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } elseif ($sortStatus && $sortTags && $sortYear) {
            $subjects = Subject::query()
                ->where('resolved', $sortStatus)
                ->where('tag_id', $sortTags)
                ->where('created_at', $sortYear)
                ->paginate(7);
        } else {
            $subjects = Subject::query()->paginate(8);
        } //OK
        $recurrings = Recurring::all();
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Tag::all();
        $created = Subject::select('created_at')->groupBy('created_at')->get();

        return view('forum.index', compact('recurrings', 'subjects', 'latests', 'status', 'tags', 'created', 'ratings'));
    }

    public function ajax(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $sortStatus = request()->input('status') ?? 'all';
        $sortTags = request()->input('tags') ?? 'all';
        $sortYear = request()->input('year') ?? 'all';

        if ($searchTerm) {
            $subjects = Subject::query()
                ->where('subject', 'like', '%' . $searchTerm . '%')
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all' && $sortTags == 'all' && $sortYear === 'all') {
            $subjects = Subject::query()->paginate(8);
        } //OK
        elseif ($sortYear === 'all' && $sortTags == 'all') {
            $subjects = Subject::query()
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all' && $sortTags == 'all') {
            $subjects = Subject::query()
                ->where('created_at', $sortYear)
                ->paginate(8);
        } //OK
        elseif ($sortYear === 'all' && $sortStatus === 'all') {
            $subjects = Subject::query()
                ->where('tag_id', $sortTags)
                ->paginate(8);
        } //OK
        elseif ($sortStatus === 'all') {
            $subjects = Subject::query()
                ->where('tag_id', $sortTags)
                ->where('created_at', $sortYear)
                ->paginate(8);
        } //OK
        elseif ($sortYear === 'all') {
            $subjects = Subject::query()
                ->where('tag_id', $sortTags)
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } //OK
        elseif ($sortTags === 'all') {
            $subjects = Subject::query()
                ->where('created_at', $sortYear)
                ->where('resolved', $sortStatus)
                ->paginate(8);
        } elseif ($sortStatus && $sortTags && $sortYear) {
            $subjects = Subject::query()
                ->where('resolved', $sortStatus)
                ->where('tag_id', $sortTags)
                ->where('created_at', $sortYear)
                ->paginate(7);
        } else {
            $subjects = Subject::query()->paginate(8);
        } //OK
        $recurrings = Recurring::all();
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $status = Subject::select('resolved')->whereNot('resolved', null)->groupBy('resolved')->get();
        $tags = Tag::all();
        $created = Subject::select('created_at')->groupBy('created_at')->get();
        return view('components.latestsubject_paginated', compact('recurrings', 'subjects', 'latests', 'status', 'tags', 'created', 'ratings'));

    }
}
