<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Spatie\NovaTranslatable\Translatable;

class ActualityTranslation extends Resource
{
    // in any service provider


    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\ActualityTranslation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

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

                Text::make(__('Name'))
                    ->sortable()
                    ->rules('required', 'max:255'),

                Text::make('Slug')
                    ->sortable()
                    ->rules('required', 'max:255'),

                Text::make('Lieu')
                    ->sortable()
                    ->rules('required', 'max:255'),

            Text::make('Locale')
                    ->sortable()
                    ->rules('required', 'max:255'),

                Text::make('Link')
                    ->sortable()
                    ->rules('required', 'max:255'),

                Trix::make('Excerpt')->rules('required'),

                Trix::make('Description')->rules('required'),


            DateTime::make('Date'),

            Image::make('Main_pictures')->onlyOnForms(),

            BelongsTo::make('Actuality', 'actuality', 'App\Nova\Actuality')
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
