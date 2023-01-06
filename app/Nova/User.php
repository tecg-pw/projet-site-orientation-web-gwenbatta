<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\User>
     */
    public static $model = \App\Models\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title() {
        return $this->firstname . ' ' . $this->name;
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email',
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

            File::make('Avatar', 'avatar')->store(function (Request $request, $model) {
                $ext = $request->avatar->getClientOriginalExtension();
                $name = sha1_file($request->avatar);

                $thumbnail_path = 'img-redimensions/avatars/' . 'thumbnail-' . $name . '.' . $ext;
                $thumbnail = \Intervention\Image\Facades\Image::make($request->avatar)->fit(150, 150)->save($thumbnail_path);

                $thumbnail_srcset_1280_path = 'img-redimensions/avatars/srcset/' . 'thumbnail-1280-' . $name . '.' . $ext;
                $thumbnail_srcset_1520_path = 'img-redimensions/avatars/srcset/' . 'thumbnail-1520-' . $name . '.' . $ext;
                $thumbnail_srcset_2040_path = 'img-redimensions/avatars/srcset/' . 'thumbnail-2040-' . $name . '.' . $ext;
                $thumbnail_srcset_2560_path = 'img-redimensions/avatars/srcset/' . 'thumbnail-2560-' . $name . '.' . $ext;

                Image::make($thumbnail)->resize(150, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_2560_path);
                Image::make($thumbnail)->resize(135, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_2040_path);
                Image::make($thumbnail)->resize(115, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1520_path);
                Image::make($thumbnail)->resize(115, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($thumbnail_srcset_1280_path);



                $full_path = 'img-redimensions/avatars/' . 'full-' . $name . '.' . $ext;
                $full = \Intervention\Image\Facades\Image::make($request->avatar)->fit(500, 500)->save($full_path);

                $full_srcset_640_path = 'img-redimensions/avatars/srcset/' . 'full-640-' . $name . '.' . $ext;
                $full_srcset_768_path = 'img-redimensions/avatars/srcset/' . 'full-768-' . $name . '.' . $ext;
                $full_srcset_1024_path = 'img-redimensions/avatars/srcset/' . 'full-1024-' . $name . '.' . $ext;
                $full_srcset_1280_path = 'img-redimensions/avatars/srcset/' . 'full-1280-' . $name . '.' . $ext;
                $full_srcset_1520_path = 'img-redimensions/avatars/srcset/' . 'full-1520-' . $name . '.' . $ext;
                $full_srcset_2040_path = 'img-redimensions/avatars/srcset/' . 'full-2040-' . $name . '.' . $ext;
                $full_srcset_2560_path = 'img-redimensions/avatars/srcset/' . 'full-2560-' . $name . '.' . $ext;


                Image::make($full)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_2560_path);
                Image::make($full)->resize(414, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_2040_path);
                Image::make($full)->resize(314, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_1520_path);
                Image::make($full)->resize(280, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_1280_path);
                Image::make($full)->resize(245, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_1024_path);
                Image::make($full)->resize(225, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_768_path);
                Image::make($full)->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_640_path);


                $tiny_path = 'img-redimensions/avatars/' . 'tiny-' . $name . '.' . $ext;
                $tiny = \Intervention\Image\Facades\Image::make($request->avatar)->fit(500, 500)->save($tiny_path);

                $tiny_srcset_640_path = 'img-redimensions/avatars/srcset/' . 'tiny-640-' . $name . '.' . $ext;
                $tiny_srcset_768_path = 'img-redimensions/avatars/srcset/' . 'tiny-768-' . $name . '.' . $ext;
                $tiny_srcset_1024_path = 'img-redimensions/avatars/srcset/' . 'tiny-1024-' . $name . '.' . $ext;
                $tiny_srcset_1280_path = 'img-redimensions/avatars/srcset/' . 'tiny-1280-' . $name . '.' . $ext;
                $tiny_srcset_1520_path = 'img-redimensions/avatars/srcset/' . 'tiny-1520-' . $name . '.' . $ext;
                $tiny_srcset_2040_path = 'img-redimensions/avatars/srcset/' . 'tiny-2040-' . $name . '.' . $ext;
                $tiny_srcset_2560_path = 'img-redimensions/avatars/srcset/' . 'tiny-2560-' . $name . '.' . $ext;


                Image::make($tiny)->resize(140, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_2560_path);
                Image::make($tiny)->resize(140, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_2040_path);
                Image::make($tiny)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_1520_path);
                Image::make($tiny)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_1280_path);
                Image::make($tiny)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_1024_path);
                Image::make($tiny)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_768_path);
                Image::make($tiny)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_640_path);


                return [
                    'avatar' => $thumbnail_path,
                    'avatars' => [
                        'thumbnail' => $thumbnail_path,
                        'full' => $full_path,
                        'tiny' => $tiny_path,
                    ],
                    'srcset' => [
                        'thumbnail' => [
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
                        'tiny' => [
                            '640' => $tiny_srcset_640_path,
                            '768' => $tiny_srcset_768_path,
                            '1024' => $tiny_srcset_1024_path,
                            '1280' => $tiny_srcset_1280_path,
                            '1520' => $tiny_srcset_1520_path,
                            '2040' => $tiny_srcset_2040_path,
                            '2560' => $tiny_srcset_2560_path,
                        ],
                    ],
                ];
            }),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Firstname')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')
                ->from('name')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', Rules\Password::defaults())
                ->updateRules('nullable', Rules\Password::defaults()),

            File::make('Bannière', 'back_image')->store(function (Request $request, $model) {
                $ext_back = $request->back_image->getClientOriginalExtension();
                $name_back = sha1_file($request->back_image);

                $tiny_path_back = 'img-redimensions/back/' . 'tiny-' . $name_back . '.' . $ext_back;
                $tiny_back = \Intervention\Image\Facades\Image::make($request->back_image)->fit(140, 140)->save($tiny_path_back);

                $tiny_srcset_back_640_path = 'img-redimensions/back/srcset/' . 'tiny-640-' . $name_back . '.' . $ext_back;
                $tiny_srcset_back_768_path = 'img-redimensions/back/srcset/' . 'tiny-768-' . $name_back . '.' . $ext_back;
                $tiny_srcset_back_1024_path = 'img-redimensions/back/srcset/' . 'tiny-1024-' . $name_back . '.' . $ext_back;
                $tiny_srcset_back_1280_path = 'img-redimensions/back/srcset/' . 'tiny-1280-' . $name_back . '.' . $ext_back;
                $tiny_srcset_back_1520_path = 'img-redimensions/back/srcset/' . 'tiny-1520-' . $name_back . '.' . $ext_back;
                $tiny_srcset_back_2040_path = 'img-redimensions/back/srcset/' . 'tiny-2040-' . $name_back . '.' . $ext_back;
                $tiny_srcset_back_2560_path = 'img-redimensions/back/srcset/' . 'tiny-2560-' . $name_back . '.' . $ext_back;

                Image::make($tiny_back)->resize(140, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_back_2560_path);
                Image::make($tiny_back)->resize(140, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_back_2040_path);
                Image::make($tiny_back)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_back_1520_path);
                Image::make($tiny_back)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_back_1280_path);
                Image::make($tiny_back)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_back_1024_path);
                Image::make($tiny_back)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_back_768_path);
                Image::make($tiny_back)->resize(108, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($tiny_srcset_back_640_path);


                $full_path_back = 'img-redimensions/back/' . 'full-' . $name_back . '.' . $ext_back;
                $full_back = \Intervention\Image\Facades\Image::make($request->back_image)->fit(2560, 600)->save($full_path_back);

                $full_srcset_back_640_path = 'img-redimensions/back/srcset/' . 'full-640-' . $name_back . '.' . $ext_back;
                $full_srcset_back_768_path = 'img-redimensions/back/srcset/' . 'full-768-' . $name_back . '.' . $ext_back;
                $full_srcset_back_1024_path = 'img-redimensions/back/srcset/' . 'full-1024-' . $name_back . '.' . $ext_back;
                $full_srcset_back_1280_path = 'img-redimensions/back/srcset/' . 'full-1280-' . $name_back . '.' . $ext_back;
                $full_srcset_back_1520_path = 'img-redimensions/back/srcset/' . 'full-1520-' . $name_back . '.' . $ext_back;
                $full_srcset_back_2040_path = 'img-redimensions/back/srcset/' . 'full-2040-' . $name_back . '.' . $ext_back;
                $full_srcset_back_2560_path = 'img-redimensions/back/srcset/' . 'full-2560-' . $name_back . '.' . $ext_back;

                Image::make($full_back)->resize( null, 185,function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_back_640_path);
                Image::make($full_back)->resize(null, 600,function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_back_2560_path);
                Image::make($full_back)->resize(550, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_back_2040_path);
                Image::make($full_back)->resize(435, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_back_1520_path);
                Image::make($full_back)->resize(367, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_back_1280_path);
                Image::make($full_back)->resize(295, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_back_1024_path);
                Image::make($full_back)->resize(220, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($full_srcset_back_768_path);

                return [
                    'back_image' => $full_path_back,
                    'back_images' => [
                        'full' => $full_path_back,
                        'tiny' => $tiny_path_back,
                    ],
                    'srcset_back' => [
                        'full' => [
                            '640' => $full_srcset_back_640_path,
                            '768' => $full_srcset_back_768_path,
                            '1024' => $full_srcset_back_1024_path,
                            '1280' => $full_srcset_back_1280_path,
                            '1520' => $full_srcset_back_1520_path,
                            '2040' => $full_srcset_back_2040_path,
                            '2560' => $full_srcset_back_2560_path,
                        ],'tiny' => [
                            '640' => $tiny_srcset_back_640_path,
                            '768' => $tiny_srcset_back_768_path,
                            '1024' => $tiny_srcset_back_1024_path,
                            '1280' => $tiny_srcset_back_1280_path,
                            '1520' => $tiny_srcset_back_1520_path,
                            '2040' => $tiny_srcset_back_2040_path,
                            '2560' => $tiny_srcset_back_2560_path,
                        ],
                    ],
                ];
            }),

            Boolean::make('Administrateur','is_admin'),

            BelongsTo::make('Status','status','App\Nova\Status'),

            HasMany::make('Sujet','subjects','App\Nova\Subject')
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
            new Filters\UserType(),
            new Filters\UserStatus(),
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
