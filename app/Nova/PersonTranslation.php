<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class PersonTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PersonTranslation::class;
    public static $displayInNavigation = false;

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
            ID::make(__('ID'), 'id')->hideFromIndex(),

            Avatar::make('Avatar')->rounded(),

            Text::make('Nom','name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Prénom','firstname')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')
                ->from('name')
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

            Text::make('Lien du Portfolio','link_Portfolio')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Github','link_Github')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Linkedin','linkedin')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Instagram','instagram')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Job')
                ->hideFromIndex()
                ->rules( 'max:255'),

            Slug::make('Job_slug')->from('job')
                ->hideFromIndex()
                ->rules( 'max:255'),

            DateTime::make('Date d\'entrée','begin')->rules('required'),

            DateTime::make('Date de sortie','end'),

            Select::make('Langues','locale')->options([
                'fr' => 'fr',
                'en' => 'en',
            ])->displayUsingLabels(),

            HasMany::make('Projects'),

            BelongsTo::make('Personnes','person','App\Nova\Person'),

            HasMany::make('Projets','projects','App\Nova\ProjetTranslation'),
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
            new Filters\Locale(),
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
