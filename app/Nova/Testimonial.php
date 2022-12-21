<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

class Testimonial extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Testimonial::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title() {
        $titleRef = \App\Models\TestimonialTranslation::where('testimonial_id',$this->id)->first();

        if (isset($titleRef)){
            return $titleRef->description;
        }
        return '';

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

            Trix::make('Description', function () {
                return $this->title();
            }),

            Text::make('Traduction', function () {
                return $this->translationList();
            })->textAlign('center'),

            BelongsTo::make('Auteur','person','App\Nova\Person'),

            HasMany::make('Traductions','translation','App\Nova\TestimonialTranslation'),

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
            new Filters\TestimonialAuthor()
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
