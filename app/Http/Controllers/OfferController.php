<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferTranslation;
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
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $offers = Offer::paginate(8);
        return view('entreprise.internship', compact('offers'));
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
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $offer->languages = json_decode($offer->languages );
        $offer->softwares = json_decode($offer->softwares );
        $offer->others = json_decode($offer->others );

        $offers = OfferTranslation::where('partner_id', $offer->partner_id)->where('id', '<>', $offer->id)->where('locale',$locale)->get();
        return view('entreprise.internship.single', compact('offer', 'offers'));
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
