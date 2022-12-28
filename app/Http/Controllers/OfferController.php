<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferTranslation;
use App\Models\Partner;
use App\Models\PartnerTranslation;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale = null)
    {
        $searchTerm = request()->input('search') ?? '';
        $sortJobs = request()->input('jobs') ?? 'all';
        $sortAgency = request()->input('agency') ?? 'all';
        $ids = [];
        if ($searchTerm) {
            $references = OfferTranslation::query()
                ->where('offertranslations.locale', $locale)
                ->join('offers', 'offers.id', '=', 'offertranslations.offer_id')
                ->join('partners', 'offers.partner_id', '=', 'partners.id')
                ->join('partnertranslations', 'partnertranslations.partner_id', '=', 'partners.id')
                ->where(function ($query) use ($searchTerm) {
                    $query->where('partnertranslations.name', 'like', '%' . $searchTerm . '%')
                          ->orWhere('offertranslations.name', 'like', '%' . $searchTerm . '%')
                          ->orWhere('offertranslations.description', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($references as $reference) {
                $ids [] = $reference->offer_id;
            };
            $offers = Offer::whereIn('id', $ids)->paginate(8);
        }
        elseif($sortJobs==='all'&&$sortAgency==='all') {
            $offers = Offer::paginate(8);
        }
       elseif($sortAgency==='all') {
            $references = OfferTranslation::query()
                ->where('offertranslations.locale', $locale)
                ->where('name',$sortJobs)
                ->get();
            foreach ($references as $reference) {
                $ids [] = $reference->offer_id;
            };
            $offers = Offer::whereIn('id', $ids)->paginate(8);
        }elseif($sortJobs==='all') {
            $references = OfferTranslation::query()
                ->where('offertranslations.locale', $locale)
                ->join('offers', 'offers.id', '=', 'offertranslations.offer_id')
                ->join('partners', 'offers.partner_id', '=', 'partners.id')
                ->join('partnertranslations', 'partnertranslations.partner_id', '=', 'partners.id')
                ->where('partnertranslations.name',$sortAgency)
                ->get();
            foreach ($references as $reference) {
                $ids [] = $reference->offer_id;
            };
            $offers = Offer::whereIn('id', $ids)->paginate(8);
        } elseif($sortJobs && $sortAgency) {
            $references = OfferTranslation::query()
                ->where('offertranslations.locale', $locale)
                ->join('offers', 'offers.id', '=', 'offertranslations.offer_id')
                ->join('partners', 'offers.partner_id', '=', 'partners.id')
                ->join('partnertranslations', 'partnertranslations.partner_id', '=', 'partners.id')
                ->where('partnertranslations.name',$sortAgency)
                ->where('offertranslations.name',$sortJobs)
                ->get();
            foreach ($references as $reference) {
                $ids [] = $reference->offer_id;
            };
            $offers = Offer::whereIn('id', $ids)->paginate(8);
        }
        else {
            $offers = Offer::paginate(8);
        }
        $jobs = OfferTranslation::select('name')->where('locale', $locale)->groupBy('name')->get();
        $agencies = PartnerTranslation::select('name')->groupBy('name')->get();
        return view('entreprise.internship', compact('offers', 'jobs', 'agencies'));
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
    public function show(string $locale = null, OfferTranslation $offer)
    {

        $offer = Offer::find($offer->offer_id);
        $offers = Offer::where('id', '<>', $offer->id)->get();
        return view('entreprise.internship.single', compact('offer', 'offers'));
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
