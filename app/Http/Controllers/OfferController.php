<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferTranslation;
use App\Models\PartnerTranslation;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale=null)
    {

        $offers = Offer::paginate(8);

        $cities = PartnerTranslation::select('locality')->groupBy('locality')->get();
        $agencies = PartnerTranslation::select('name')->groupBy('name')->get();
        return view('entreprise.internship', compact('offers','cities','agencies'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale=null,OfferTranslation $offer)
    {
        $offer = Offer::find($offer->offer_id);
        $offers = Offer::where('id', '<>', $offer->id)->get();
        return view('entreprise.internship.single', compact('offer','offers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
