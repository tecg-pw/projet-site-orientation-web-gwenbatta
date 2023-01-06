<?php

namespace App\Nova;

use Ctessier\NovaAdvancedImageField\AdvancedImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
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
        'id', 'name', 'slug'
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

            File::make('Logo de l\'entreprise', 'logo')->store(function (Request $request, $model) {
                $ext = $request->logo->getClientOriginalExtension();
                $name = sha1_file($request->logo);

                $thumbnail_path = 'img-redimensions/logo/' . 'thumbnail-' . $name . '.' . $ext;
                $thumbnail = \Intervention\Image\Facades\Image::make($request->logo)->fit(120, 120)->save($thumbnail_path);

                $thumbnail_srcset_640_path = 'img-redimensions/logo/srcset/' . 'thumbnail-640-' . $name . '.' . $ext;
                $thumbnail_srcset_768_path = 'img-redimensions/logo/srcset/' . 'thumbnail-768-' . $name . '.' . $ext;
                $thumbnail_srcset_1024_path = 'img-redimensions/logo/srcset/' . 'thumbnail-1024-' . $name . '.' . $ext;
                $thumbnail_srcset_1280_path = 'img-redimensions/logo/srcset/' . 'thumbnail-1280-' . $name . '.' . $ext;
                $thumbnail_srcset_1520_path = 'img-redimensions/logo/srcset/' . 'thumbnail-1520-' . $name . '.' . $ext;
                $thumbnail_srcset_2040_path = 'img-redimensions/logo/srcset/' . 'thumbnail-2040-' . $name . '.' . $ext;
                $thumbnail_srcset_2560_path = 'img-redimensions/logo/srcset/' . 'thumbnail-2560-' . $name . '.' . $ext;

                Image::make($thumbnail)->resize(120, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_2560_path);
                Image::make($thumbnail)->resize(105, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_2040_path);
                Image::make($thumbnail)->resize(98, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1520_path);
                Image::make($thumbnail)->resize(87, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1280_path);
                Image::make($thumbnail)->resize(85, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1024_path);
                Image::make($thumbnail)->resize(98, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_768_path);
                Image::make($thumbnail)->resize(98, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_640_path);


                $full_path = 'img-redimensions/logo/' . 'full-' . $name . '.' . $ext;
                $full = \Intervention\Image\Facades\Image::make($request->logo)->fit(560, 560)->save($full_path);

                $full_srcset_640_path = 'img-redimensions/logo/srcset/' . 'full-640-' . $name . '.' . $ext;
                $full_srcset_768_path = 'img-redimensions/logo/srcset/' . 'full-768-' . $name . '.' . $ext;
                $full_srcset_1024_path = 'img-redimensions/logo/srcset/' . 'full-1024-' . $name . '.' . $ext;
                $full_srcset_1280_path = 'img-redimensions/logo/srcset/' . 'full-1280-' . $name . '.' . $ext;
                $full_srcset_1520_path = 'img-redimensions/logo/srcset/' . 'full-1520-' . $name . '.' . $ext;
                $full_srcset_2040_path = 'img-redimensions/logo/srcset/' . 'full-2040-' . $name . '.' . $ext;
                $full_srcset_2560_path = 'img-redimensions/logo/srcset/' . 'full-2560-' . $name . '.' . $ext;

                Image::make($full)->resize(560, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_640_path);
                Image::make($full)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_2560_path);
                Image::make($full)->resize(420, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_2040_path);
                Image::make($full)->resize(345, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_1520_path);
                Image::make($full)->resize(345, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_1280_path);
                Image::make($full)->resize(290, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_1024_path);
                Image::make($full)->resize(276, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_768_path);

                return [
                    'logo' => $thumbnail_path,
                    'logos' => [
                        'thumbnail' => $thumbnail_path,
                        'full' => $full_path,
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
                        ],'full' => [
                            '640' => $full_srcset_640_path,
                            '768' => $full_srcset_768_path,
                            '1024' => $full_srcset_1024_path,
                            '1280' => $full_srcset_1280_path,
                            '1520' => $full_srcset_1520_path,
                            '2040' => $full_srcset_2040_path,
                            '2560' => $full_srcset_2560_path,
                        ],
                    ],
                ];
            }),

            Text::make('Nom', 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')
                ->from('name')
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

            Text::make('Ville', 'locality')
                ->hideFromIndex()
                ->rules('max:255'),

            Number::make('Localité', 'locality_number'),

            Text::make('Lien Linkedin', 'link_linkedin')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Instagram', 'link_instagram')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Facebook', 'link_facebook')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien du site', 'site_link')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Membre de l\'équipe', 'members')->hideFromIndex(),

            Trix::make('Description'),

            Select::make('Langues', 'locale')->options([
                'fr' => 'fr',
                'en' => 'en',
            ])->displayUsingLabels(),

            BelongsTo::make('Partenaires', 'partner', 'App\Nova\Partner'),
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
