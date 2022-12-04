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
    public function index(string $locale=null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $coordinates = Coordinate::all();
        return view('contact.student', compact('coordinates'));
    }
}
