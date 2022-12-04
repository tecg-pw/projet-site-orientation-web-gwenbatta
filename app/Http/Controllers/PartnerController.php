<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferTranslation;
use App\Models\Partner;
use App\Models\PartnerTranslation;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string  $locale=null)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $partners = Partner::paginate(8);

        $cities = PartnerTranslation::select('locality')->groupBy('locality')->get();
        $agencies = PartnerTranslation::select('name')->groupBy('name')->get();

        return view('entreprise.partner', compact('partners', 'cities', 'agencies'));
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
    public function show(string $locale=null, PartnerTranslation $partner)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $offers = OfferTranslation::where('partner_id', $partner->id)->where('locale',$locale)->get();
        $alumnis = PartnerTranslation::find($partner->id)->person()->get();
        $partner->members = json_decode($partner->members);
        return view('entreprise.partner.single', compact('partner','offers','alumnis'));
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
