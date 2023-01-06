<?php

namespace App\Nova\Filters;

use App\Models\OfferTranslation;
use App\Models\PersonTranslation;
use App\Models\Project;
use App\Models\ProjetTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProjectPerson extends Filter
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
        $projects = \App\Models\Project::all();

        $ids = [];
        foreach ($projects as $project) {
            if ($project->person_id == $value){
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
        $projectRefs = Project::select('person_id')->get();
        $projects = [];

        foreach ($projectRefs as $project) {
            $projects[$project->person->translation->first()->name .' ' .$project->person->translation->first()->firstname] = $project->person_id;
        }
        return $projects;
    }
}
