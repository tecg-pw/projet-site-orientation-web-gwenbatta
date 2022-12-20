<?php

namespace App\Nova\Filters;

use Laravel\Nova\Filters\BooleanFilter;
use Laravel\Nova\Http\Requests\NovaRequest;

class PersonTeacher extends BooleanFilter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    public $name = 'Voir les professeurs ?';

    public function apply(NovaRequest $request, $query, $value)
    {
        // $value = ['admin' => true / false, 'editor' => true / false]

        $people = \App\Models\People::all();

        $ids = [];
        foreach ($people as $person) {
            if ($person->translation->where('locale',app()->getLocale())->first()->isTeacher){
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
        return [
            'Oui' => 1,
        ];
    }

}
