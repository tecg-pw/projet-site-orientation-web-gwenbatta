<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

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
        return \App\Models\CourseTranslation::where('course_id',$this->id)->first()->name;
    }
    public function bac() {
        return \App\Models\CourseTranslation::where('course_id',$this->id)->first()->bac;
    }
    public function hours() {
        return \App\Models\CourseTranslation::where('course_id',$this->id)->first()->hours;
    }
    public function person(){
        return \App\Models\Course::find($this->course_id)->person;
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

            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Name', function () {
                return $this->title();
            }),
            Text::make('Bac', function () {
                return $this->bac();
            }),
            Text::make('Hours', function () {
                return $this->hours();
            })->textAlign('right'),

            Text::make('Traduction', function () {
                return $this->translationList();
            })->textAlign('right'),

            HasMany::make('Translations','translation','App\Nova\CourseTranslation'),

            HasMany::make('People','person','App\Nova\Person'),

            HasMany::make('Docs','docs','App\Nova\Doc'),

            HasMany::make('Books','books','App\Nova\Book'),

            HasMany::make('Tools','tools','App\Nova\Tool'),
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
        return [];
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
