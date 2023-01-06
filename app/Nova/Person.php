<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class Person extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\People::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title()
    {
        $nameRef = \App\Models\PersonTranslation::where('people_id',$this->id)->first();
        $firstnameRef = \App\Models\PersonTranslation::where('people_id',$this->id)->first();
        if (isset($nameRef)){
            return $nameRef->name.' '.$firstnameRef->firstname;
        }
        return '';
    }
    public function status()
    {
        $statusRef = \App\Models\PersonTranslation::where('people_id', $this->id)->first();

        if (isset($statusRef)){
            return $statusRef->status;
        }
        return '';
    }

    public function projects()
    {
        $projects = \App\Models\Project::where('person_id', $this->id)->get();
        if ($projects !== []) {
            return count($projects);
        } else {
            return null;
        }
    }

    public function translationList()
    {
        $locales = [];
        $translations = $this->translation;
        foreach ($translations as $translation) {
            $locales[] = $translation->locale;
        }
        return implode(' , ',$locales);
    }
    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->hideFromIndex(),

            Text::make('Nom', function () {
                return $this->title();
            }),

            Text::make('Status', function () {
                return $this->status();
            }),

            Number::make('Nombre de projets', function () {
                return $this->projects();
            })->textAlign('center'),

            Text::make('Traduction', function () {
                return $this->translationList();
            })->textAlign('center'),

            HasMany::make('Traductions', 'translation', 'App\Nova\PersonTranslation'),

            BelongsToMany::make('Cours', 'courses', 'App\Nova\Course'),

            HasMany::make('Projets','projects','App\Nova\Project'),

            HasMany::make('Témoignages', 'testimonial', 'App\Nova\Testimonial'),


        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\PersonTeacher(),
            new Filters\PersonBegin(),
            new Filters\PersonEnd(),
            new Filters\PersonStatus(),
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
