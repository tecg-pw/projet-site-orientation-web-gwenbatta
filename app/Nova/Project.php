<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title() {
        $titleRef = \App\Models\ProjetTranslation::where('project_id',$this->id)->first();

        if (isset($titleRef)){
            return $titleRef->title;
        }
        return '';
    }
    public function author() {
            $nameRef = \App\Models\Project::where('id',$this->id)->first();
        if (isset($nameRef)){
            return $nameRef->person->translation->where('locale',app()->getLocale())->first()->name.' '.$nameRef->person->translation->where('locale',app()->getLocale())->first()->firstname;
        }
        return '';

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
        'id','title'
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

            Text::make('Titre', function () {
                return $this->title();
            }),
            Text::make('Auteur', function () {
                return $this->author();
            }),
            Text::make('Traductions', function () {
                return $this->translationList();
            })->textAlign('right'),

            HasMany::make('Traductions','translation','App\Nova\ProjetTranslation'),

            BelongsToMany::make('Cours','course','App\Nova\Course'),

            BelongsTo::make('Personnes', 'person', 'App\Nova\Person'),

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
            new Filters\ProjectPerson(),
            new Filters\ProjectCourse(),
            new Filters\ProjectDate(),
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
