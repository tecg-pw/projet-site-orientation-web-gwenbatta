<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Course::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title() {
        $titleRef = \App\Models\CourseTranslation::where('course_id',$this->id)->first();

        if (isset($titleRef)){
            return $titleRef->name;
        }
        return '';
    }
    public function bac() {
        $bacRef =  \App\Models\CourseTranslation::where('course_id',$this->id)->first();
        if (isset($bacRef)){
            return $bacRef->bac;
        }
        return '';
    }
    public function hours() {
        $hourRef =  \App\Models\CourseTranslation::where('course_id',$this->id)->first();
        if (isset($hourRef)){
            return $hourRef->hours;
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
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [

            ID::make(__('ID'), 'id')->hideFromIndex(),

            Text::make('Nom', function () {
                return $this->title();
            }),
            Text::make('Année de Bachelier', function () {
                return $this->bac();
            })->textAlign('center'),
            Text::make('Heures de cours', function () {
                return $this->hours();
            })->textAlign('center'),

            Text::make('Traduction', function () {
                return $this->translationList();
            })->textAlign('center'),

            HasMany::make('Traduction','translation','App\Nova\CourseTranslation'),

            HasMany::make('Personnes','person','App\Nova\Person'),

            HasMany::make('Documentation','docs','App\Nova\Doc'),

            HasMany::make('Livres','books','App\Nova\Book'),

            HasMany::make('Outils','tools','App\Nova\Tool'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\BacYear(),
            new Filters\TeacherCourse(),
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
