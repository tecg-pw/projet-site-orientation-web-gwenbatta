<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\Subject;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $locale = null)
    {
        $sortStatus = request()->input('status') ?? 'all';
        $sortYear = request()->input('year') ?? 'all';
        $searchTerm = request()->input('search') ?? '';
        $people = [];

        if ($searchTerm) {
            $references = PersonTranslation::query()
                ->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('firstname', 'like', '%' . $searchTerm . '%')
                ->orWhere('status', 'like', '%' . $searchTerm . '%')
                ->orWhere('begin', 'like', '%' . $searchTerm . '%')
                ->orWhere('end', 'like', '%' . $searchTerm . '%')
                ->where('locale', $locale)
                ->paginate(8);

            foreach ($references as $reference) {
                    $people [] = People::find($reference->people_id);
            }

        }
//        elseif ($sortStatus === 'all' && $sortYear === 'all') {
//            $references = People::query()->paginate(8);
//            foreach ($references as $reference) {
//                $people [] = People::find($reference->people_id);
//            }
//        }
//        elseif ($sortStatus === 'all') {
//            $references = PersonTranslation::query()
//                ->where('begin', $sortYear)
//                ->paginate(8);
//
//            foreach ($references as $reference) {
//                $people [] = People::find($reference->people_id);
//            }
//        } //OK
//        elseif ($sortYear === 'all') {
//            $references = PersonTranslation::query()
//                ->where('status', $sortStatus)
//                ->paginate(8);
//
//            foreach ($references as $reference) {
//                $people [] = People::find($reference->people_id);
//            }
//        }
//        elseif ($searchTerm === '') {
//            $references = People::query()->paginate(8);
//            foreach ($references as $reference) {
//                $people [] = People::find($reference->people_id);
//            }
//        } //OK
        else {
            $references = PersonTranslation::query();

            foreach ($references as $reference) {
                $people [] = People::find($reference->people_id);
            }

        }

        $testimonials = Testimonial::take(4)->orderBy('created_at')->get();
        $status = PersonTranslation::select('status')->where('locale', $locale)->groupBy('status')->get();
        $years_end = PersonTranslation::select('end')->where('locale', $locale)->whereNot('end', null)->groupBy('end')->orderBy('end', 'DESC')->get();
        return view('bottin', compact('people', 'status', 'years_end', 'testimonials'));
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
