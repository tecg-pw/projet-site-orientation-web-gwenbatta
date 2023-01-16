<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use App\Models\ActualityTranslation;
use Illuminate\Http\Request;

class ActualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $ids = [];
        if ($searchTerm) {
            $references = ActualityTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%')
                        ->orWhere('date', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($references as $reference) {
                $ids [] = $reference->actuality_id;
            }
            $news = Actuality::whereIn('id', $ids)->paginate(9);

        } else {
            $news = Actuality::latest()->paginate(9);
        }

        return view('news.index', compact('news'));
    }

    public function ajax(string $locale = null)
    {
        $ids = [];
        $searchTerm = request()->input('search') ?? '';
        $references = ActualityTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%')
                    ->orWhere('date', 'like', '%' . $searchTerm . '%');
            })->get();

        foreach ($references as $reference) {
            $ids [] = $reference->actuality_id;
        }
        $news = Actuality::whereIn('id', $ids)->paginate(9);
        return view('components.new_paginated', compact('news'));
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
     * @param int $new
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale = null, ActualityTranslation $new)
    {
        $locales = [];

        $new = Actuality::find($new->actuality_id);

        foreach ($new->translation as $new_ref) {
            $locales[] = $new_ref;
        }
        $new = $new->translation->where('locale', $locale)->first();
        //$new =  ActualityTranslation::where('locale',$locale)->get();

        return view('news.single', compact('new', 'locales'));
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
