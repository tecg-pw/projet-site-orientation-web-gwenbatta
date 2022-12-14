<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\NovaTranslatable\Translatable;

class Actuality extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Actuality::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title() {
        return \App\Models\ActualityTranslation::where('actuality_id',$this->id)->first()->name;
    }
    public function location() {
        return \App\Models\ActualityTranslation::where('actuality_id',$this->id)->first()->lieu;
    }
    public function date() {
        return \App\Models\ActualityTranslation::where('actuality_id',$this->id)->first()->date;
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
            ID::make(__('ID'), 'id')->hide(),

            Text::make('Name', function () {
                return $this->title();
            }),
            Text::make('Location', function () {
                return $this->location();
            }),
            Date::make('Date', function () {
                return $this->date();
            }),

            Text::make('Traduction', function () {
                return $this->translationList();
            }),

            HasMany::make('Translations','translation','App\Nova\ActualityTranslation'),

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
