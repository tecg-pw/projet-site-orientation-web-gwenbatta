<?php

namespace App\Nova\Filters;

use App\Models\Subject;
use App\Models\User;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class SubjectTag extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Tag';
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
        $users = Subject::all();
        $ids = [];
        foreach ($users as $tagRef) {
            if ($tagRef->tag_id == $value) {
                $ids [] = $tagRef->id;
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
        $tagRefs = Subject::select('tag_id')->get();
        $tag = [];
        foreach ($tagRefs as $tagSingle) {
            $tag[$tagSingle->tag->translation->first()->name] = $tagSingle->tag_id;
        }
        return $tag;
    }
}
