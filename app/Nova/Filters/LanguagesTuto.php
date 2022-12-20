<?php

namespace App\Nova\Filters;

use App\Models\TutoTranslation;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class LanguagesTuto extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Langages de programmation';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        $tutos = \App\Models\Tuto::all();

        $ids = [];
        foreach ($tutos as $tuto) {
            if ($tuto->translation->where('locale',app()->getLocale())->first()->languages == $value){
                $ids[] = $tuto->id;
            }
        }

        return $query->whereIn('id', $ids);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $tutosRefs = TutoTranslation::select('languages')->where('locale','fr')->groupBy('languages')->get();
        $tutos = [];
        foreach ($tutosRefs as $tuto) {
            $tutos[] = $tuto->languages;
        }
        return $tutos;
    }
}
