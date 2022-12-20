<?php

namespace App\Nova\Filters;

use App\Models\PartnerTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class LocationPartner extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Lieu';

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
        $partners = \App\Models\Partner::all();

        $ids = [];
        foreach ($partners as $partner) {
            if ($partner->translation->where('locale',app()->getLocale())->first()->locality == $value){
                $ids[] = $partner->id;
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
        $partnerRefs = PartnerTranslation::where('locale',app()->getLocale())->select('locality')->groupBy('locality')->get();
        $partners = [];

        foreach ($partnerRefs as $partner) {
            $partners[] = $partner->locality;
        }
        return $partners;
    }
}
