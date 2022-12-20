<?php

namespace App\Nova\Filters;

use App\Models\CourseTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProjectCourse extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Cours';

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
        $projects = \App\Models\Course::where('courses.id', '=', $value)->first()->projects;

        $ids = [];

        foreach ($projects as $project) {
            $ids[] = $project->id;
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
        $coursesRefs = CourseTranslation::where('locale','fr')->get();
        $courses = [];
        foreach ($coursesRefs as $course) {
            $courses[$course->name . ' ' .$course->bac] = $course->course_id;
        }
        return $courses;
    }
}
