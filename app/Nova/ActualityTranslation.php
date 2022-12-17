<?php

namespace App\Nova;


use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class ActualityTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ActualityTranslation>
     */
    public static $model = \App\Models\ActualityTranslation::class;
    public static $displayInNavigation = false;

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
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->hideFromIndex(),

            Text::make('Nom','name')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')->from('name')
                ->sortable()
                ->rules('required', 'max:255'),

            Select::make('Langue','locale')->options([
                'fr' => 'fr',
                'en' => 'en',
            ])->displayUsingLabels(),

            Trix::make('Résumé','excerpt')->rules('required'),

            Trix::make('Description')->rules('required'),

            Text::make('Lieu')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Lien','link')
                ->sortable()
                ->rules('required', 'max:255'),

            Image::make('Image Principale','main_pictures')->onlyOnForms(),

            Date::make('Date'),

            BelongsTo::make('Actuality', 'actuality', 'App\Nova\Actuality')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
