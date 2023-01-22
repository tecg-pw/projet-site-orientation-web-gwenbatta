<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale = null)
    {
        $alumnis = $this->getAlumni($locale);
        $testimonials = Testimonial::take(4)->orderBy('created_at')->get();
        $status = PersonTranslation::select('status')->where('locale', $locale)
            ->where(function ($query){
                $query->where('status','ancien')
                    ->orWhere('status','alumni')
                    ->orWhere('status','teachalumni');
            })
            ->groupBy('status')->get();
        $years_end = PersonTranslation::select('end')->where('locale', $locale)->whereNot('end', null)->groupBy('end')->orderBy('end', 'DESC')->get();

        return view('bottin.alumni', compact('alumnis', 'status', 'years_end', 'testimonials'));
    }
    private function getAlumni(string $locale = null){
        $sortStatus = request()->input('status') ?? 'all';
        $sortYear = request()->input('year') ?? 'all';
        $searchTerm = request()->input('search') ?? '';
        $ids = [];

        if ($searchTerm) {
            $references = PersonTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('firstname', 'like', '%' . $searchTerm . '%')
                        ->orWhere('status', 'like', '%' . $searchTerm . '%')
                        ->orWhere('begin', 'like', '%' . $searchTerm . '%')
                        ->orWhere('end', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($references as $reference) {
                if ($reference->status === 'ancien'||$reference->status === 'alumni'||$reference->status === 'teachalumni'){
                    $ids [] = $reference->people_id;
                }
            }
            $alumnis = People::whereIn('id', $ids)->paginate(8);

        }
        elseif ($sortStatus === 'all' && $sortYear === 'all') {
            $references = PersonTranslation::all();
            foreach ($references as $reference) {
                if ($reference->status === 'ancien'||$reference->status === 'alumni'||$reference->status === 'teachalumni'){
                    $ids [] = $reference->people_id;
                }
            }
            $alumnis = People::whereIn('id', $ids)->paginate(8);
        }
        elseif ($sortStatus === 'all') {
            $references = PersonTranslation::query()
                ->where('end', $sortYear)
                ->get();

            foreach ($references as $reference) {
                if ($reference->status === 'ancien'||$reference->status === 'alumni'||$reference->status === 'teachalumni'){
                    $ids [] = $reference->people_id;
                }
            }
            $alumnis = People::whereIn('id', $ids)->paginate(8);
        }
        elseif ($sortYear === 'all') {
            $references = PersonTranslation::query()
                ->where('status', $sortStatus)
                ->get();

            foreach ($references as $reference) {
                if ($reference->status === 'ancien'||$reference->status === 'alumni'||$reference->status === 'teachalumni'){
                    $ids [] = $reference->people_id;
                }
            }
            $alumnis = People::whereIn('id', $ids)->paginate(8);
        }
        elseif ($sortYear && $sortStatus) {
            $references = PersonTranslation::query()
                ->where('status', $sortStatus)
                ->where('end', $sortYear)
                ->get();

            foreach ($references as $reference) {
                if ($reference->status === 'ancien'||$reference->status === 'alumni'||$reference->status === 'teachalumni'){
                    $ids [] = $reference->people_id;
                }
            }
            $alumnis = People::whereIn('id', $ids)->paginate(8);
        }
        else {
            $references = PersonTranslation::all();
            foreach ($references as $reference) {
                if ($reference->status === 'ancien'||$reference->status === 'alumni'||$reference->status === 'teachalumni'){
                    $ids [] = $reference->people_id;
                }
            }
            $alumnis = People::whereIn('id', $ids)->paginate(8);
        }
        return $alumnis;
    }

    public function ajax(string $locale = null)
    {
        $alumnis = $this->getAlumni($locale);
        $testimonials = Testimonial::take(4)->orderBy('created_at')->get();
        $status = PersonTranslation::select('status')->where('locale', $locale)
            ->where(function ($query){
                $query->where('status','ancien')
                    ->orWhere('status','alumni')
                    ->orWhere('status','teachalumni');
            })
            ->groupBy('status')->get();
        $years_end = PersonTranslation::select('end')->where('locale', $locale)->whereNot('end', null)->groupBy('end')->orderBy('end', 'DESC')->get();
        return view('components.alumni_paginated', compact('alumnis', 'status', 'years_end', 'testimonials'));
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function show(string $locale = null, PersonTranslation $alumni)
    {

        $alumni = People::find($alumni->people_id);
        $projects = $alumni->projects;
        $alumni = $alumni->translation->where('locale', $locale)->first();


        return view('bottin.alumni.name', compact('alumni', 'projects'));
    }


}
