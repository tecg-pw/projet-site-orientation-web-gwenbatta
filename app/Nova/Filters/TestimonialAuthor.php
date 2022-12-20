<?php

namespace App\Nova\Filters;

use App\Models\PersonTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class TestimonialAuthor extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Auteur';

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
        return $query->where('people_id',$value);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $personRefs = PersonTranslation::where('locale',app()->getLocale())->select('people_id','name','firstname')->get();
        $people = [];

        foreach ($personRefs as $person) {
            $people[$person->name . ' '. $person->firstname] = $person->people_id;
        }
        return $people;
    }
}
