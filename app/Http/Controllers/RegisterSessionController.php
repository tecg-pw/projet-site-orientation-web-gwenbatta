<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Uploads\HandlesBackImagesUploads;
use App\Http\Uploads\HandlesImagesUploads;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class RegisterSessionController extends Controller
{
    use HandlesImagesUploads, HandlesBackImagesUploads;

    public function create(string $locale = null)
    {

        return view('user.register');
    }

    public function store(string $locale = null, RegisterRequest $request)
    {

        $validated = $request->validated();
        $validated['slug'] = \Str::slug($validated['firstname'] . $validated['name']);
        $validated['status_id'] = 1;
        $validated['newsletter'] = 0;

        if ($validated['newsletter'] === 'on') {
            $validated['newsletter'] = 1;
        }

        $validated['password'] = password_hash($validated['password'], PASSWORD_DEFAULT);
        $validated['back_image'] = 'img-redimensions/back/c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png';
        $validated['back_images']['full'] = 'img-redimensions/back/full-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png';
        $validated['back_images']['tiny'] = 'img-redimensions/back/tiny-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png';
        $validated['srcset_back'] = [
            'tiny' => [
                '640' => 'img-redimensions/back/srcset/tiny-640-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '768' => 'img-redimensions/back/srcset/tiny-768-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '1024' => 'img-redimensions/back/srcset/tiny-1024-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '1280' => 'img-redimensions/back/srcset/tiny-1280-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '1520' => 'img-redimensions/back/srcset/tiny-1520-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '2040' => 'img-redimensions/back/srcset/tiny-2040-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '2560' => 'img-redimensions/back/srcset/tiny-2560-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                ],
            'full' => [
                '640' => 'img-redimensions/back/srcset/full-640-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '768' => 'img-redimensions/back/srcset/full-768-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '1024' => 'img-redimensions/back/srcset/full-1024-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '1280' => 'img-redimensions/back/srcset/full-1280-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '1520' => 'img-redimensions/back/srcset/full-1520-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '2040' => 'img-redimensions/back/srcset/full-2040-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
                '2560' => 'img-redimensions/back/srcset/full-2560-c324b8b1e522e40ccb36f4dedfb5fad0405cb7da.png',
            ],
        ];

        $validated['avatar'] = 'img-redimensions/avatars/8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png';
        $validated['avatars']['thumbnail'] = 'img-redimensions/avatars/thumbnail-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png';
        $validated['avatars']['full'] = 'img-redimensions/avatars/full-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png';
        $validated['avatars']['tiny'] = 'img-redimensions/avatars/tiny-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png';
        $validated['srcset'] = [
            'thumbnail' => [
                '640' => 'img-redimensions/avatars/srcset/thumbnail-640-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '768' => 'img-redimensions/avatars/srcset/thumbnail-768-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1024' => 'img-redimensions/avatars/srcset/thumbnail-1024-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1280' => 'img-redimensions/avatars/srcset/thumbnail-1280-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1520' => 'img-redimensions/avatars/srcset/thumbnail-1520-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '2040' => 'img-redimensions/avatars/srcset/thumbnail-2040-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '2560' => 'img-redimensions/avatars/srcset/thumbnail-2560-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
            ],
            'full' => [
                '640' => 'img-redimensions/avatars/srcset/full-640-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '768' => 'img-redimensions/avatars/srcset/full-768-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1024' => 'img-redimensions/avatars/srcset/full-1024-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1280' => 'img-redimensions/avatars/srcset/full-1280-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1520' => 'img-redimensions/avatars/srcset/full-1520-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '2040' => 'img-redimensions/avatars/srcset/full-2040-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '2560' => 'img-redimensions/avatars/srcset/full-2560-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
            ],
            'tiny' => [
                '640' => 'img-redimensions/avatars/srcset/tiny-640-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '768' => 'img-redimensions/avatars/srcset/tiny-768-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1024' => 'img-redimensions/avatars/srcset/tiny-1024-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1280' => 'img-redimensions/avatars/srcset/tiny-1280-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '1520' => 'img-redimensions/avatars/srcset/tiny-1520-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '2040' => 'img-redimensions/avatars/srcset/tiny-2040-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
                '2560' => 'img-redimensions/avatars/srcset/tiny-2560-8db07fe781a1ab9fa1533e0aa3ac3e1b9b572906.png',
            ],
        ];


        $user = User::create($validated);
        \Auth::login($user);
        return redirect('/' . $locale)->with('success', __('home.success_register') . auth()->user()->firstname . ' ' . auth()->user()->name);

    }
}
