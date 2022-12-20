<?php

namespace App\Nova\Filters;

use App\Models\ActualityTranslation;
use App\Models\PersonTranslation;
use Carbon\Carbon;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class PersonBegin extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    public $name = 'Date de début';

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
            if ($person->translation->where('locale',app()->getLocale())->first()->begin == Carbon::parse($value)){
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
        $personRefs = PersonTranslation::where('locale',app()->getLocale())->select('begin')->get();
        $people = [];

        foreach ($personRefs as $person) {
            $people[$person->begin->translatedFormat('d M Y')] = $person->begin;
        }
        return $people;
    }
}
