<?php

namespace App\Nova\Filters;

use App\Models\ActualityTranslation;
use App\Models\ProjetTranslation;
use Carbon\Carbon;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProjectDate extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Date';

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
        $projects = \App\Models\Project::all();

        $ids = [];
        foreach ($projects as $project) {
            if ($project->translation->where('locale',app()->getLocale())->first()->date == Carbon::parse($value)){
                $ids[] = $project->id;
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
        $projectRefs = ProjetTranslation::where('locale',app()->getLocale())->select('date')->get();
        $projects = [];

        foreach ($projectRefs as $project) {
            $projects[$project->date->translatedFormat('d M Y')] = $project->date;
        }
        return $projects;
    }
}
