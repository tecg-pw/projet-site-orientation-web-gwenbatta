<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class Book extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Book::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title()
    {
        return \App\Models\BookTranslation::where('book_id', $this->id)->first()->name;
    }

    public function course()
    {
        $courses = $this->course;
        foreach ($courses as $course) {
            return $course->translation->first()->name;
        }
    }

    public function year()
    {
        $courses = $this->course;
        foreach ($courses as $course) {
            return $course->translation->first()->bac;
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
            Text::make('Cours', function () {
                return $this->course();
            }),
            Number::make('Year', function () {
                return $this->year();
            })->sortable(),
            Text::make('Traduction', function () {
                return $this->translationList();
            })->textAlign('right'),

            HasMany::make('Traduction', 'translation', 'App\Nova\BookTranslation'),

            BelongsToMany::make('Cours','course','App\Nova\Course')
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
           new Filters\Course(),
            new Filters\BacYear(),
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
