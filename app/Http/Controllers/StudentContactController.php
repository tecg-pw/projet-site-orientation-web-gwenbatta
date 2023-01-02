<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;
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
    public function store(string $locale = null, ContactRequest $request)
    {
        $validatedData = $request->safe()->all();

        $contact = Contact::create($validatedData);

        return redirect('/' . $locale . '/contact/student')->with('success', 'Message envoyé avec succès');
    }
}
