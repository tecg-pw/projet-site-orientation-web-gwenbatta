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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale=null)
    {
        $user =  auth()->user();
        $tutos = User::find($user->id)->tutos()->get();
        $subjects =  User::find($user->id)->subjects()->get();
        return view('user.profile', compact('user', 'tutos','subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $locale=null)
    {
        $user =  auth()->user();
        $status = Status::all();
        return view('user.profile.modify', compact('user','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(string $locale=null, UpdateUserRequest $request)
    {
        $validatedData =  $request->safe()->all();
        $validatedData['slug'] = Str::slug($validatedData['firstname'].$validatedData['name']);
        $uploaded_image = $request->file('avatar');
        if ($uploaded_image){
            $validatedData['avatar'] = '/img-redimensions/avatars/' . $this->resizeAndSave($uploaded_image);
        }
        $uploaded_back_image = $request->file('back_image');
        if ($uploaded_back_image){
        $validatedData['back_image'] = '/img-redimensions/back/' . $this->resizeAndSaveBack($uploaded_back_image);
        }

        auth()->user()->update($validatedData);


        return redirect('/'.$locale.'/user/profile/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
