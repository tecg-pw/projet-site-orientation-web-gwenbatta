<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;

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
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $coordinates = Coordinate::where('locale',$locale)->get();
        return view('contact.agency', compact('coordinates'));
    }
}
