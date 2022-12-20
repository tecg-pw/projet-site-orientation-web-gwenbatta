<?php

namespace App\Nova\Filters;

use App\Models\OfferTranslation;
use App\Models\PartnerTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class OfferSupervisor extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    public $name = 'Maitre de stage';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        $offers = \App\Models\Offer::all();

        $ids = [];
        foreach ($offers as $offer) {
            if ($offer->translation->where('locale',app()->getLocale())->first()->supervisor == $value){
                $ids[] = $offer->id;
            }
        }

        return $query->whereIn('id', $ids);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $offerRefs = OfferTranslation::where('locale',app()->getLocale())->select('supervisor')->groupBy('supervisor')->get();
        $offers = [];

        foreach ($offerRefs as $offer) {
            $offers[] = $offer->supervisor;
        }
        return $offers;
    }
}
