<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Offer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Offer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title() {
        $titleRef =  \App\Models\OfferTranslation::where('offer_id',$this->id)->first();
        if (isset($titleRef)){
            return $titleRef->name;
        }
        return '';
    }
    public function supervisor() {
        $supervisorRef = \App\Models\OfferTranslation::where('offer_id',$this->id)->first();
        if (isset($supervisorRef)){
            return $supervisorRef->supervisor;
        }
        return '';
    }
    public function pdf() {
        $pdfRef =  \App\Models\OfferTranslation::where('offer_id',$this->id)->first();
        if (isset($pdfRef)){
            return $pdfRef->pdf;
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
            Text::make('Nom', function () {
                return $this->title();
            }),

            HasMany::make('Traductions','translation', 'App\Nova\OfferTranslation'),

            BelongsTo::make('Partner','partner','App\Nova\Partner'),

            Text::make('Nom du maître de stage', function () {
                return $this->supervisor();
            }),

            Text::make('Offre PDF', function () {
                return $this->pdf();
            }),

            Text::make('Traductions', function () {
                return $this->translationList();
            })->textAlign('right'),
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
            new Filters\OfferSupervisor(),
            new Filters\OfferPartner(),
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
