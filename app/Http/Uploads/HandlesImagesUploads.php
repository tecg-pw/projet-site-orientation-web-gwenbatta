<?php

namespace App\Http\Uploads;

use Intervention\Image\Facades\Image;

trait HandlesImagesUploads
{
    public function resizeAndSave($uploaded_image)
    {
        $ext = $uploaded_image->getClientOriginalExtension();
        $name = sha1_file($uploaded_image);
        $img = Image::make($uploaded_image);

        $img->resize(200,null, function ($contraint){
            $contraint->aspectRatio();
        });
        $img->save( 'img-redimensions/avatars/'.$name.'.'.$ext);
        return $name.'.'.$ext;
    }
}
