<?php

namespace App\Http\Uploads;
use Intervention\Image\Facades\Image;

trait HandlesPDFUploads
{
    public function save($uploaded_pdf)
    {
        $ext = $uploaded_pdf->getClientOriginalExtension();
        $name = sha1_file($uploaded_pdf);
        //$pdf = Image::make($uploaded_pdf);

        $uploaded_pdf->save( 'offer/pdf/'.$name.'.'.$ext);
        return $name.'.'.$ext;
    }
}
