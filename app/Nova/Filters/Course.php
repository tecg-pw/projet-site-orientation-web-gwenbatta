<?php

namespace App\Nova\Filters;

use App\Models\Book;
use App\Models\CourseTranslation;
use DB;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class Course extends Filter
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
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        //return DB::table('book_course')->where('course_id', $value);
        return  $query->where('course_id', $value)->get();
    }
    /**
     * Get the filter's available options.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $coursesRefs = CourseTranslation::select('course_id', 'name')->where('locale',"fr")->whereNotNull('name')->groupBy('name', 'course_id')->get();
        $courses = [];
        foreach ($coursesRefs as $course) {
            $courses[$course->name] = $course->course_id;
        }
        return $courses;
    }
}
