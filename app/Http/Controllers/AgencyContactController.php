<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;
use App\Models\Language;
use App\Models\Software;

class AgencyContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale = null)
    {

        $coordinates = Coordinate::all();
        $languages = Language::all();
        $softwares = Software::all();
        return view('contact.agency', compact('coordinates','languages','softwares'));
    }
}
