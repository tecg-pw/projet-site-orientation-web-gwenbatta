<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Tool extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Tool::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title() {
        $titleRef = \App\Models\ToolTranslation::where('tool_id',$this->id)->first();

        if (isset($titleRef)){
            return $titleRef->name;
        }
        return '';
    }
    public function link() {

        $linkRef = \App\Models\ToolTranslation::where('tool_id',$this->id)->first();

        if (isset($linkRef)){
            return $linkRef->link;
        }
        return '';
    }
    public function course()
    {
        $courses = $this->courses;
        foreach ($courses as $course) {
            return $course->translation->first()->name;
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
            Text::make('Lien', function () {
                return $this->link();
            }),
            Text::make('Cours', function () {
                return $this->course();
            }),
            Text::make('Traduction', function () {
                return $this->translationList();
            })->textAlign('right'),

            HasMany::make('Traductions','translation','App\Nova\ToolTranslation'),

            BelongsToMany::make('Cours','courses','App\Nova\Course')
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
            new Filters\CourseTool(),
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
