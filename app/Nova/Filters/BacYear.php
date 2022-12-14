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
        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $coursesRefs = CourseTranslation::select('course_id', 'bac')->where('locale', "fr")->whereNotNull('bac')->groupBy('bac', 'course_id')->get();
        $courses = [];
        foreach ($coursesRefs as $course) {
            $courses[$course->bac] = $course->course_id;
        }
        return $courses;
    }
}
