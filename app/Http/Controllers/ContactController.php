<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function indexStudent()
    {
        $coordinates = Coordinate::all();
        return view('contact.student', compact('coordinates'));
    }
    public function indexAgency()
    {
        $coordinates = Coordinate::all();
        return view('contact.agency', compact('coordinates'));
    }
}
