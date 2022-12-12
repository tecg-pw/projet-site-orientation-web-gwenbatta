<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\ProjetTranslation;
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

        $testimonials = Testimonial::take(4)->orderBy('created_at')->get();
        $alumnis = [];
        $people = People::all();
        foreach ($people as $person) {
            if ($person->translation->where('locale', $locale)->first()->status === 'ancien' || $person->translation->where('locale', $locale)->first()->status === 'alumni' || $person->translation->where('locale', $locale)->first()->status === 'teachalumni' ) {
                $alumnis [] = $person;
            }
        }
        $status = PersonTranslation::select('status')->where('locale', $locale)->groupBy('status')->get();
        $years_end = PersonTranslation::select('end')->where('locale', $locale)->whereNot('end', null)->groupBy('end')->orderBy('end', 'DESC')->get();

        return view('bottin.alumni', compact('alumnis', 'status', 'years_end', 'testimonials'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale = null, PersonTranslation $alumni)
    {

        $alumni = People::find($alumni->people_id);
        $alumni = $alumni->translation->where('locale', $locale)->first();

        $projects = ProjetTranslation::where('person_id', $alumni->people_id)->where('locale', $locale)->orderBy('date')->take(6)->get();

        return view('bottin.alumni.name', compact('alumni', 'projects'));
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
