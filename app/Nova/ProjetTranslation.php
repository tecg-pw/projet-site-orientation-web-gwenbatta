<?php

namespace App\Nova;

use Ctessier\NovaAdvancedImageField\AdvancedImage;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;

class ProjetTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\ProjetTranslation::class;
    public static $displayInNavigation = false;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title','slug'
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

            Text::make('Titre','title')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')->from('title')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('Lien du projet','link_project')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Github','link_github')
                ->hideFromIndex()
                ->rules('max:255'),

            AdvancedImage::make('Image principale','main_picture')
                ->croppable(1)
                ->rounded()
                ->resize(370,370)
                ->disk('public')
                ->path('/img-redimensions/project'),

            Select::make('Langue','locale')->options([
                'fr' => 'fr',
                'en' => 'en',
            ])->displayUsingLabels(),

            Date::make('Date'),

            Number::make('Person_id'),

            Trix::make('Description')->rows(3),

            BelongsTo::make('Personnes', 'person', 'App\Nova\PersonTranslation')
                ->onlyOnDetail(),

            BelongsTo::make('Projet','project','App\Nova\Project')
                ->onlyOnDetail(),
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
            new Filters\Locale(),
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
