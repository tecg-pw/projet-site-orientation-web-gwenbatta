<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class PersonTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PersonTranslation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'mail';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','name','slug'
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

            Avatar::make('Avatar')->rounded(),


            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Firstname')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Slug')
                ->hideFromIndex()
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Mail')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Text::make('Status')
                ->sortable()
                ->rules('required','max:255'),

            Textarea::make('Description')->rows(3),

            Text::make('Link_Portfolio')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Link_Github')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Linkedin')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Instagram')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Github')
                ->hideFromIndex()
                ->rules( 'max:255'),

            Text::make('Job')
                ->hideFromIndex()
                ->rules( 'max:255'),

            Text::make('Job_slug')
                ->hideFromIndex()
                ->rules( 'max:255'),

            DateTime::make('Begin')->rules('required'),

            DateTime::make('End'),

            HasMany::make('Projects'),

            HasMany::make('Testimonials'),

            BelongsTo::make('People','translation','App\Nova\Person'),
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
