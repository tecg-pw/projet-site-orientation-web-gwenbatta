<?php

namespace App\Nova;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
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
                'de'=> 'de',
                'nl'=>'nl'
            ])->displayUsingLabels(),

            Trix::make('Résumé','excerpt')->rules('required'),

            Trix::make('Description')->rules('required'),

            Text::make('Lieu')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Lien','link')
                ->sortable()
                ->rules('required', 'max:255'),

            File::make('Image principale','main_picture')->store(function (Request $request, $model){
                $ext = $request->main_picture->getClientOriginalExtension();
                $name =  sha1_file($request->main_picture);

                $thumbnail_path = 'img-redimensions/news/' . 'thumbnail-' .  $name . '.' . $ext;
                $thumbnail = Image::make($request->main_picture)->fit(655, 655)->save($thumbnail_path);

                $thumbnail_srcset_640_path = 'img-redimensions/news/srcset/' . 'thumbnail-640-' .  $name . '.' . $ext;
                $thumbnail_srcset_768_path = 'img-redimensions/news/srcset/' . 'thumbnail-768-' .  $name . '.' . $ext;
                $thumbnail_srcset_1024_path = 'img-redimensions/news/srcset/' . 'thumbnail-1024-' .  $name . '.' . $ext;
                $thumbnail_srcset_1280_path = 'img-redimensions/news/srcset/' . 'thumbnail-1280-' .  $name . '.' . $ext;
                $thumbnail_srcset_1520_path = 'img-redimensions/news/srcset/' . 'thumbnail-1520-' .  $name . '.' . $ext;
                $thumbnail_srcset_2040_path = 'img-redimensions/news/srcset/' . 'thumbnail-2040-' .  $name . '.' . $ext;
                $thumbnail_srcset_2560_path = 'img-redimensions/news/srcset/' . 'thumbnail-2560-' .  $name . '.' . $ext;

                Image::make($thumbnail)->resize(655, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_2560_path);
                Image::make($thumbnail)->resize(494, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_2040_path);
                Image::make($thumbnail)->resize(370, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1520_path);
                Image::make($thumbnail)->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1280_path);
                Image::make($thumbnail)->resize(405, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1024_path);
                Image::make($thumbnail)->resize(308, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_768_path);
                Image::make($thumbnail)->resize(520, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_640_path);

                return [
                    'main_picture' => $thumbnail_path,
                    'pictures' => [
                        'thumbnail' => $thumbnail_path,
                    ],
                    'srcset' => [
                        'thumbnail' => [
                            '640' => $thumbnail_srcset_640_path,
                            '768' => $thumbnail_srcset_768_path,
                            '1024' => $thumbnail_srcset_1024_path,
                            '1520' => $thumbnail_srcset_1520_path,
                            '2560' => $thumbnail_srcset_2560_path,
                        ],
                    ],
                ];
            }),

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
        return [
            new Filters\Locale(),
            new Filters\LocationActu(),
            new Filters\DateActu(),
        ];
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
