<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactAgencyRequest;
use App\Models\ContactAgency;
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
    public function create(string $locale = null)
    {
        $coordinates = Coordinate::all();
        $languages = Language::all();
        $softwares = Software::all();
        return view('contact.agency', compact('coordinates','languages','softwares'));
    }
    public function store(string $locale = null, ContactAgencyRequest $request)
    {
        $validatedData = $request->safe()->all();
        if (isset($validatedData['softwares'])){
        $validatedData['softwares'] = json_encode($validatedData['softwares']);
        }
        if (isset($validatedData['languages'])){
        $validatedData['languages'] = json_encode($validatedData['languages']);
        }
        $contact = ContactAgency::create($validatedData);

        return redirect('/' . $locale . '/contact/agency')->with('success', 'Message envoyé avec succès');
    }
}
