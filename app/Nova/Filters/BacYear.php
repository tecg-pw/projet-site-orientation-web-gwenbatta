<?php

namespace App\Nova\Filters;

use App\Models\CourseTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class BacYear extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    public $name = 'Année de BAC';

    /**
     * Apply the filter to the given query.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        $courses = \App\Models\Course::all();

        $ids = [];
        foreach ($courses as $course) {
            if ($course->translation->where('locale',app()->getLocale())->first()->bac == $value){
                $ids[] = $course->id;
            }
        }

        return $query->whereIn('id', $ids);
    }

    /**
     * Get the filter's available options.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $coursesRefs = CourseTranslation::select('bac')->whereNotNull('bac')->groupBy('bac')->get();
        $courses = [];
        foreach ($coursesRefs as $course) {
            $courses[] = $course->bac;
        }
        return $courses;
    }
}
