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

            File::make('Image principale','main_picture')->store(function (Request $request, $model){
                $ext = $request->main_picture->getClientOriginalExtension();
                $name =  sha1_file($request->main_picture);

                $thumbnail_path = 'img-redimensions/project/' . 'thumbnail-' .  $name . '.' . $ext;
                $thumbnail = \Intervention\Image\Facades\Image::make($request->main_picture)->fit(655, 655)->save($thumbnail_path);

                $thumbnail_srcset_640_path = 'img-redimensions/project/srcset/' . 'thumbnail-640-' .  $name . '.' . $ext;
                $thumbnail_srcset_768_path = 'img-redimensions/project/srcset/' . 'thumbnail-768-' .  $name . '.' . $ext;
                $thumbnail_srcset_1024_path = 'img-redimensions/project/srcset/' . 'thumbnail-1024-' .  $name . '.' . $ext;
                $thumbnail_srcset_1280_path = 'img-redimensions/project/srcset/' . 'thumbnail-1280-' .  $name . '.' . $ext;
                $thumbnail_srcset_1520_path = 'img-redimensions/project/srcset/' . 'thumbnail-1520-' .  $name . '.' . $ext;
                $thumbnail_srcset_2040_path = 'img-redimensions/project/srcset/' . 'thumbnail-2040-' .  $name . '.' . $ext;
                $thumbnail_srcset_2560_path = 'img-redimensions/project/srcset/' . 'thumbnail-2560-' .  $name . '.' . $ext;

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
                            '1280' => $thumbnail_srcset_1280_path,
                            '1520' => $thumbnail_srcset_1520_path,
                            '2040' => $thumbnail_srcset_2040_path,
                            '2560' => $thumbnail_srcset_2560_path,
                        ],
                    ],
                ];
            }),

            Select::make('Langue','locale')->options([
                'fr' => 'fr',
                'en' => 'en',
            ])->displayUsingLabels(),

            Date::make('Date'),

            Trix::make('Description'),

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
