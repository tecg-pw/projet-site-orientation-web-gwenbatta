<?php

namespace App\Http\Uploads;

use Intervention\Image\Facades\Image;

trait HandlesBackImagesUploads
{
    public function resizeAndSaveBack($uploaded_image)
    {
        $ext = $uploaded_image->getClientOriginalExtension();
        $name = sha1_file($uploaded_image);
        $img = Image::make($uploaded_image);

        $img->fit(1920,550);
        $img->save( 'img-redimensions/back/'.$name.'.'.$ext);
        return $name.'.'.$ext;
    }
}
