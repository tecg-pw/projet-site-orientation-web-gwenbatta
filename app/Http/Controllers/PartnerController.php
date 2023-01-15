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
    public function index(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $sortCities = request()->input('cities') ?? 'all';
        $sortAgency = request()->input('agency') ?? 'all';
        $ids = [];
        if ($searchTerm) {
            $references = PartnerTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('locality', 'like', '%' . $searchTerm . '%')
                        ->orWhere('locality_number', 'like', '%' . $searchTerm . '%')
                        ->orWhere('adresse', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($references as $reference) {
                $ids [] = $reference->partner_id;
            };
            $partners = Partner::whereIn('id', $ids)->paginate(8);
        } elseif ($sortCities === 'all' && $sortAgency === 'all') {
            $partners = Partner::paginate(8);
        } elseif ($sortCities === 'all') {
            $references = PartnerTranslation::query()
                ->where('locale', $locale)
                ->where('name', $sortAgency)->get();
            foreach ($references as $reference) {
                $ids [] = $reference->partner_id;
            };
            $partners = Partner::whereIn('id', $ids)->paginate(8);
        } elseif ($sortAgency === 'all') {
            $references = PartnerTranslation::query()
                ->where('locale', $locale)
                ->where('locality', $sortCities)
                ->get();
            foreach ($references as $reference) {
                $ids [] = $reference->partner_id;
            };
            $partners = Partner::whereIn('id', $ids)->paginate(8);

        } elseif ($sortCities && $sortAgency) {
            $references = PartnerTranslation::query()
                ->where('locale', $locale)
                ->where('locality', $sortCities)
                ->where('name', $sortAgency)
                ->get();

            foreach ($references as $reference) {
                $ids [] = $reference->partner_id;
            };
            $partners = Partner::whereIn('id', $ids)->paginate(8);
        } else {
            $partners = Partner::paginate(8);
        }

        $cities = PartnerTranslation::select('locality')->groupBy('locality')->get();
        $agencies = PartnerTranslation::select('name')->groupBy('name')->get();

        return view('entreprise.partner', compact('partners', 'cities', 'agencies'));
    }

    public function ajax(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $ids = [];
        $references = PartnerTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('locality', 'like', '%' . $searchTerm . '%')
                    ->orWhere('locality_number', 'like', '%' . $searchTerm . '%')
                    ->orWhere('adresse', 'like', '%' . $searchTerm . '%');
            })->get();
        foreach ($references as $reference) {
            $ids [] = $reference->partner_id;
        }
        $partners = Partner::whereIn('id', $ids)->paginate(8);
        $cities = PartnerTranslation::select('locality')->groupBy('locality')->get();
        $agencies = PartnerTranslation::select('name')->groupBy('name')->get();

        return view('components.container_partner', compact('partners', 'cities', 'agencies'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale = null, PartnerTranslation $partner)
    {

        $offers = Offer::where('partner_id', $partner->partner_id)->get();
        $alumnis = PartnerTranslation::find($partner->id)->person()->get();
        $partner = Partner::find($partner->partner_id);
        return view('entreprise.partner.single', compact('partner', 'offers', 'alumnis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
