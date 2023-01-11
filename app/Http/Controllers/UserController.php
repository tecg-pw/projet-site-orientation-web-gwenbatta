<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateUserRequest;
use App\Http\Uploads\HandlesBackImagesUploads;
use App\Http\Uploads\HandlesImagesUploads;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Str;

class UserController extends Controller
{
    use HandlesImagesUploads, HandlesBackImagesUploads;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale = null)
    {
        $user = auth()->user();
        $tutos = User::find($user->id)->tutos()->get();
        $subjects = User::find($user->id)->subjects()->get();
        return view('user.profile', compact('user', 'tutos', 'subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $locale = null)
    {
        $user = auth()->user();
        $status = Status::all();
        return view('user.profile.modify', compact('user', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(string $locale = null, UpdateUserRequest $request)
    {
        $validatedData = $request->safe()->only('name',
            'firstname',
            'status_id',
            'description',
            'avatar',
            'avatars',
            'srcset',
            'newsletter',
            'back_image',
            'back_images',
            'srcset_back',
            'email');

        if ($request->input('password_old') !== null) {
            $validatedData = $request->safe()->all();
            $validatedData['password'] = password_hash($validatedData['password_new'], PASSWORD_DEFAULT);
        }
        $request['newsletter'] === 'on' ? $validatedData['newsletter'] = true : $validatedData['newsletter'] = false;

        $validatedData['slug'] = Str::slug($validatedData['firstname'] . $validatedData['name']);
        $uploaded_image = $request->file('avatar');
        if ($uploaded_image) {
            $validatedData['avatar'] = 'img-redimensions/avatars/' . $this->resizeAndSave($uploaded_image);
            $validatedData['avatars']['thumbnail'] = 'img-redimensions/avatars/' . 'thumbnail-' . $this->resizeAndSaveThumb($uploaded_image);
            $validatedData['avatars']['full'] = 'img-redimensions/avatars/' . 'full-' . $this->resizeAndSaveFull($uploaded_image);
            $validatedData['avatars']['tiny'] = 'img-redimensions/avatars/' . 'tiny-' . $this->resizeAndSaveTiny($uploaded_image);
            $validatedData['srcset'] = [
                'thumbnail' => $this->srcsetThumb($uploaded_image),
                'full' => $this->srcsetFull($uploaded_image),
                'tiny' => $this->srcsetTiny($uploaded_image),
            ];
        }
        $uploaded_back_image = $request->file('back_image');
        if ($uploaded_back_image) {
            $validatedData['back_image'] = 'img-redimensions/back/' . $this->resizeAndSaveBack($uploaded_back_image);
            $validatedData['back_images']['full'] = 'img-redimensions/back/' . 'full-' . $this->resizeAndSaveBackFull($uploaded_back_image);
            $validatedData['back_images']['tiny'] = 'img-redimensions/back/' . 'tiny-' . $this->resizeAndSaveBackTiny($uploaded_back_image);
            $validatedData['srcset_back'] = [
                'full' => $this->srcsetBackFull($uploaded_back_image),
                'tiny' => $this->srcsetBackTiny($uploaded_back_image),
            ];
        }

        auth()->user()->update($validatedData);

        return redirect('/' . $locale . '/user/profile/')->with('status', __('user.user_modify_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
