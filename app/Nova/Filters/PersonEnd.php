<?php

namespace App\Nova\Filters;

use App\Models\PersonTranslation;
use Carbon\Carbon;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class PersonEnd extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    public $name = 'Date de fin';

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
            if ($person->translation->where('locale',app()->getLocale())->first()->end == Carbon::parse($value)){
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
        $personRefs = PersonTranslation::where('locale',app()->getLocale())->select('end')->get();
        $people = [];

        foreach ($personRefs as $person) {
            if (isset( $person->end)){
                $people[$person->end->translatedFormat('d M Y')] = $person->end;
            }
        }
        return $people;
    }
}
