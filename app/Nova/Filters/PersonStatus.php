<?php

namespace App\Nova\Filters;

use App\Models\OfferTranslation;
use App\Models\PersonTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class PersonStatus extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    public $name = 'Status';

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
        $people = \App\Models\People::all();

        $ids = [];
        foreach ($people as $person) {
            if ($person->translation->where('locale',app()->getLocale())->first()->status == $value){
                $ids[] = $person->id;
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
        $personRefs = PersonTranslation::where('locale',app()->getLocale())->select('status')->groupBy('status')->get();
        $people = [];

        foreach ($personRefs as $person) {
            $people[] = $person->status;
        }
        return $people;
    }
}
