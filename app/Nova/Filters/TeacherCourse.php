<?php

namespace App\Nova\Filters;

use App\Models\CourseTranslation;
use App\Models\PersonTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class TeacherCourse extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Professeurs';

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
        $people = \App\Models\People::where('people.id', '=', $value)->first()->courses;

        $ids = [];

        foreach ($people as $person) {
            $ids[] = $person->id;
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
        $peopleRefs = PersonTranslation::where('locale','fr')->where('isTeacher',true)->get();
        $people = [];
        foreach ($peopleRefs as $person) {
            $people[$person->name . ' ' .$person->firstname] = $person->people_id;
        }
        return $people;
    }
}
