<?php

namespace App\Http\Uploads;
use Barryvdh\DomPDF\PDF;
use Symfony\Component\Console\Input\Input;

trait HandlesPDFUploads
{
    public function save($uploaded_pdf)
    {
        $ext = $uploaded_pdf->getClientOriginalExtension();
        $name = sha1_file($uploaded_pdf);
        //$pdf = ::make($uploaded_pdf);

        $uploaded_pdf->save( 'offer/pdf/'.$name.'.'.$ext);
        return $name.'.'.$ext;
    }
}
