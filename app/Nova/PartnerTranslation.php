<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

class PartnerTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PartnerTranslation::class;
    public static $displayInNavigation = false;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

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

            Image::make('Logo')->disk('public')->rounded(),

            Text::make('Nom','name')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('Mail')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Text::make('Adresse')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Ville','locality')
                ->hideFromIndex()
                ->rules('max:255'),

            Number::make('Localité','locality_number'),

            Text::make('Lien Linkedin','link_linkedin')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Instagram','link_instagram')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Facebook','link_facebook')
                ->hideFromIndex()
                ->rules( 'max:255'),

            Text::make('Lien du site','site_link')
                ->hideFromIndex()
                ->rules( 'max:255'),

            Text::make('Membre de l\'équipe','members')->hideFromIndex(),

            Trix::make('Description'),

            Select::make('Langues','locale')->options([
                'fr' => 'fr',
                'en' => 'en',
            ])->displayUsingLabels(),

            HasMany::make('Offers'),

            BelongsTo::make('Partenaires','partner','App\Nova\Partner'),
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
