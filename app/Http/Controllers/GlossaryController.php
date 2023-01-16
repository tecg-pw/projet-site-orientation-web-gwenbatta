<?php

namespace App\Http\Controllers;

use App\Models\Glossary;
use App\Models\GlossaryTranslation;

class GlossaryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $ids = [];
        if ($searchTerm) {
            $references = GlossaryTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('definition', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($references as $reference) {
                $ids [] = $reference->glossary_id;
            }
            $termes = Glossary::whereIn('id', $ids)->paginate(8);

        } else {
            $termes = Glossary::paginate(8);
        }
        return view('technical.glossary', compact('termes'));
    }

    public function ajax(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $ids = [];
            $references = GlossaryTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('definition', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($references as $reference) {
                $ids [] = $reference->glossary_id;
            }
            $termes = Glossary::whereIn('id', $ids)->paginate(8);
        return view('components.glossary_paginated', compact('termes'));
    }
}
