<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;


class StudentContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(string $locale=null)
    {
        $coordinates = Coordinate::all();
        return view('contact.student', compact('coordinates'));
    }
}
