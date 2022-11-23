<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\People;
use App\Models\Project;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        $people = People::paginate(8);
        $status = People::select('status')->groupBy('status')->get();
        $years_end = People::select('end')->whereNot('end', null)->groupBy('end')->orderBy('end','DESC')->get();
        return view('bottin', compact('people', 'status', 'years_end', 'testimonials'));
    }

    public function indexAlumni()
    {
        $testimonials = Testimonial::all();
        $people = People::where('status', 'ancien')->orWhere('status', 'teachalumni')->get();
        $status = People::select('status')->groupBy('status')->get();
        $years_end = People::select('end')->whereNot('end', null)->groupBy('end')->orderBy('end','DESC')->get();
        return view('bottin.alumni', compact('people', 'status', 'years_end', 'testimonials'));
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
     * @param People $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showTeacher(People $teacher)
    {
        return view('bottin.teacher.name', compact('teacher'));
    }

    public function showTeachAlumni(People $teachalumni)
    {
        $projects = Project::where('person_id', $teachalumni->id)->orderBy('date')->take(6)->get();
        return view('bottin.teachalumni.name', compact('teachalumni', 'projects'));
    }

    public function showAlumni(People $alumni)
    {
        $projects = Project::where('person_id', $alumni->id)->orderBy('date')->take(6)->get();
        return view('bottin.alumni.name', compact('alumni', 'projects'));
    }

    public function showStudent(People $student)
    {
        $projects = Project::where('person_id', $student->id)->orderBy('date')->take(6)->get();
        return view('bottin.student.name', compact('student', 'projects'));
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
