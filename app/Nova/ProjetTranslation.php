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
use Murdercode\TinymceEditor\TinymceEditor;

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
        'id', 'title', 'slug'
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

            Text::make('Titre', 'title')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')->from('title')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('Lien du projet', 'link_project')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Lien Github', 'link_github')
                ->hideFromIndex()
                ->rules('max:255'),

            File::make('Image principale', 'main_picture')
                ->store(function (Request $request, $model) {
                    $ext = $request->main_picture->getClientOriginalExtension();
                    $name = sha1_file($request->main_picture);

                    $thumbnail_path = 'img-redimensions/project/' . 'thumbnail-' . $name . '.' . $ext;
                    $thumbnail = \Intervention\Image\Facades\Image::make($request->main_picture)->fit(655, 655)->save($thumbnail_path);

                    $thumbnail_srcset_640_path = 'img-redimensions/project/srcset/' . 'thumbnail-640-' . $name . '.' . $ext;
                    $thumbnail_srcset_768_path = 'img-redimensions/project/srcset/' . 'thumbnail-768-' . $name . '.' . $ext;
                    $thumbnail_srcset_1024_path = 'img-redimensions/project/srcset/' . 'thumbnail-1024-' . $name . '.' . $ext;
                    $thumbnail_srcset_1280_path = 'img-redimensions/project/srcset/' . 'thumbnail-1280-' . $name . '.' . $ext;
                    $thumbnail_srcset_1520_path = 'img-redimensions/project/srcset/' . 'thumbnail-1520-' . $name . '.' . $ext;
                    $thumbnail_srcset_2040_path = 'img-redimensions/project/srcset/' . 'thumbnail-2040-' . $name . '.' . $ext;
                    $thumbnail_srcset_2560_path = 'img-redimensions/project/srcset/' . 'thumbnail-2560-' . $name . '.' . $ext;

                    Image::make($thumbnail)->resize(655, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_2560_path);
                    Image::make($thumbnail)->resize(580, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_2040_path);
                    Image::make($thumbnail)->resize(532, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_1520_path);
                    Image::make($thumbnail)->resize(520, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_1280_path);
                    Image::make($thumbnail)->resize(423, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_1024_path);
                    Image::make($thumbnail)->resize(526, null, function ($constraint) {
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

            File::make('Image Large', 'gallery_large')
                ->store(function (Request $request, $model) {
                    $ext = $request->gallery_large->getClientOriginalExtension();
                    $name = sha1_file($request->gallery_large);

                    $large_path = 'img-redimensions/project/gallery' . 'large-' . $name . '.' . $ext;
                    $large = \Intervention\Image\Facades\Image::make($request->gallery_large)->fit(1078, 448)->save($large_path);

                    $large_srcset_1280_path = 'img-redimensions/project/gallery/srcset/' . 'large-1280-' . $name . '.' . $ext;
                    $large_srcset_1520_path = 'img-redimensions/project/gallery/srcset/' . 'large-1520-' . $name . '.' . $ext;
                    $large_srcset_2040_path = 'img-redimensions/project/gallery/srcset/' . 'large-2040-' . $name . '.' . $ext;
                    $large_srcset_2560_path = 'img-redimensions/project/gallery/srcset/' . 'large-2560-' . $name . '.' . $ext;

                    Image::make($large)->resize(1078, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($large_srcset_2560_path);
                    Image::make($large)->resize(818, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($large_srcset_2040_path);
                    Image::make($large)->resize(622, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($large_srcset_1520_path);
                    Image::make($large)->resize(502, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($large_srcset_1280_path);


                    return [
                        'gallery_large' => $large_path,
                        'srcset_gallery_large' => [
                            'large' => [
                                '1280' => $large_srcset_1280_path,
                                '1520' => $large_srcset_1520_path,
                                '2040' => $large_srcset_2040_path,
                                '2560' => $large_srcset_2560_path,
                            ],
                        ],
                    ];
                }),

            File::make('Petite Image 1', 'gallery_small_1')
                ->store(function (Request $request, $model) {
                    $ext = $request->gallery_small_1->getClientOriginalExtension();
                    $name = sha1_file($request->gallery_small_1);

                    $small_1_path = 'img-redimensions/project/gallery' . 'small_1-' . $name . '.' . $ext;
                    $small_1 = \Intervention\Image\Facades\Image::make($request->gallery_small_1)->fit(530, 448)->save($small_1_path);

                    $small_1_srcset_1280_path = 'img-redimensions/project/gallery/srcset/' . 'small_1-1280-' . $name . '.' . $ext;
                    $small_1_srcset_1520_path = 'img-redimensions/project/gallery/srcset/' . 'small_1-1520-' . $name . '.' . $ext;
                    $small_1_srcset_2040_path = 'img-redimensions/project/gallery/srcset/' . 'small_1-2040-' . $name . '.' . $ext;
                    $small_1_srcset_2560_path = 'img-redimensions/project/gallery/srcset/' . 'small_1-2560-' . $name . '.' . $ext;

                    Image::make($small_1)->resize(530, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_1_srcset_2560_path);
                    Image::make($small_1)->resize(400, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_1_srcset_2040_path);
                    Image::make($small_1)->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_1_srcset_1520_path);
                    Image::make($small_1)->resize(240, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_1_srcset_1280_path);


                    return [
                        'gallery_small_1' => $small_1_path,
                        'srcset_gallery_small_1' => [
                            'small_1' => [
                                '1280' => $small_1_srcset_1280_path,
                                '1520' => $small_1_srcset_1520_path,
                                '2040' => $small_1_srcset_2040_path,
                                '2560' => $small_1_srcset_2560_path,
                            ],
                        ],
                    ];
                }),

            File::make('Petite Image 2', 'gallery_small_2')
                ->store(function (Request $request, $model) {
                    $ext = $request->gallery_small_2->getClientOriginalExtension();
                    $name = sha1_file($request->gallery_small_2);

                    $small_2_path = 'img-redimensions/project/gallery' . 'small_2-' . $name . '.' . $ext;
                    $small_2 = \Intervention\Image\Facades\Image::make($request->gallery_small_2)->fit(530, 448)->save($small_2_path);

                    $small_2_srcset_1280_path = 'img-redimensions/project/gallery/srcset/' . 'small_2-1280-' . $name . '.' . $ext;
                    $small_2_srcset_1520_path = 'img-redimensions/project/gallery/srcset/' . 'small_2-1520-' . $name . '.' . $ext;
                    $small_2_srcset_2040_path = 'img-redimensions/project/gallery/srcset/' . 'small_2-2040-' . $name . '.' . $ext;
                    $small_2_srcset_2560_path = 'img-redimensions/project/gallery/srcset/' . 'small_2-2560-' . $name . '.' . $ext;

                    Image::make($small_2)->resize(530, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_2_srcset_2560_path);
                    Image::make($small_2)->resize(400, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_2_srcset_2040_path);
                    Image::make($small_2)->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_2_srcset_1520_path);
                    Image::make($small_2)->resize(240, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_2_srcset_1280_path);


                    return [
                        'gallery_small_2' => $small_2_path,
                        'srcset_gallery_small_2' => [
                            'small_2' => [
                                '1280' => $small_2_srcset_1280_path,
                                '1520' => $small_2_srcset_1520_path,
                                '2040' => $small_2_srcset_2040_path,
                                '2560' => $small_2_srcset_2560_path,
                            ],
                        ],
                    ];
                }),

            File::make('Image Vertical 1', 'gallery_vertical_1')
                ->store(function (Request $request, $model) {
                    $ext = $request->gallery_vertical_1->getClientOriginalExtension();
                    $name = sha1_file($request->gallery_vertical_1);

                    $vertical_1_path = 'img-redimensions/project/gallery' . 'vertical_1-' . $name . '.' . $ext;
                    $vertical_1 = \Intervention\Image\Facades\Image::make($request->gallery_vertical_1)->fit(516, 915)->save($vertical_1_path);

                    $vertical_1_srcset_1280_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_1-1280-' . $name . '.' . $ext;
                    $vertical_1_srcset_1520_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_1-1520-' . $name . '.' . $ext;
                    $vertical_1_srcset_2040_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_1-2040-' . $name . '.' . $ext;
                    $vertical_1_srcset_2560_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_1-2560-' . $name . '.' . $ext;

                    Image::make($vertical_1)->resize(516, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_1_srcset_2560_path);
                    Image::make($vertical_1)->resize(395, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_1_srcset_2040_path);
                    Image::make($vertical_1)->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_1_srcset_1520_path);
                    Image::make($vertical_1)->resize(241, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_1_srcset_1280_path);


                    return [
                        'gallery_vertical_1' => $vertical_1_path,
                        'srcset_gallery_vertical_1' => [
                            'vertical_1' => [
                                '1280' => $vertical_1_srcset_1280_path,
                                '1520' => $vertical_1_srcset_1520_path,
                                '2040' => $vertical_1_srcset_2040_path,
                                '2560' => $vertical_1_srcset_2560_path,
                            ],
                        ],
                    ];
                }),

            File::make('Image Vertical 2', 'gallery_vertical_2')
                ->store(function (Request $request, $model) {
                    $ext = $request->gallery_vertical_2->getClientOriginalExtension();
                    $name = sha1_file($request->gallery_vertical_2);

                    $vertical_2_path = 'img-redimensions/project/gallery' . 'vertical_2-' . $name . '.' . $ext;
                    $vertical_2 = \Intervention\Image\Facades\Image::make($request->gallery_vertical_2)->fit(516, 915)->save($vertical_2_path);

                    $vertical_2_srcset_1280_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_2-1280-' . $name . '.' . $ext;
                    $vertical_2_srcset_1520_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_2-1520-' . $name . '.' . $ext;
                    $vertical_2_srcset_2040_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_2-2040-' . $name . '.' . $ext;
                    $vertical_2_srcset_2560_path = 'img-redimensions/project/gallery/srcset/' . 'vertical_2-2560-' . $name . '.' . $ext;

                    Image::make($vertical_2)->resize(516, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_2_srcset_2560_path);
                    Image::make($vertical_2)->resize(395, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_2_srcset_2040_path);
                    Image::make($vertical_2)->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_2_srcset_1520_path);
                    Image::make($vertical_2)->resize(241, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($vertical_2_srcset_1280_path);


                    return [
                        'gallery_vertical_2' => $vertical_2_path,
                        'srcset_gallery_vertical_2' => [
                            'vertical_2' => [
                                '1280' => $vertical_2_srcset_1280_path,
                                '1520' => $vertical_2_srcset_1520_path,
                                '2040' => $vertical_2_srcset_2040_path,
                                '2560' => $vertical_2_srcset_2560_path,
                            ],
                        ],
                    ];
                }),

            Select::make('Langue', 'locale')->options([
                'fr' => 'fr',
                'en' => 'en',
                'de' => 'de',
                'nl' => 'nl'
            ])->displayUsingLabels(),

            Date::make('Date'),

            TinymceEditor::make('Description')->rules(['required']),

            BelongsTo::make('Projet', 'project', 'App\Nova\Project')
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
