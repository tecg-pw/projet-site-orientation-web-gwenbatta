<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Doc;
use App\Models\Glossary;
use App\Models\Subject;
use App\Models\Tuto;
use Illuminate\Http\Request;

class TechnicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale=null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $subjects = Subject::all();
        $latests = Subject::latest()->take(2)->get();
        $ratings = Subject::orderBy('comments_count', 'DESC')->take(2)->get();
        $termes = Glossary::take(4)->get();
        $tutos = Tuto::take(4)->get();
        $docs = Doc::take(4)->get();
        return view('technical.index', compact('termes', 'tutos', 'docs', 'subjects', 'latests','ratings'));
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
    public function show($id)
    {
        //
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
