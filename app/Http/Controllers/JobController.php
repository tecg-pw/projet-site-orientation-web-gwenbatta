<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\OpportunityTranslation;


class JobController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale = null, OpportunityTranslation $job)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        //$alumnis = People::where('job_slug', $job->slug)->where('status', 'ancien')->get();
        $alumnis = People::all();
        $jobs = OpportunityTranslation::where('id','<>', $job->id)->where('locale',$locale)->take(4)->get();
        return view('about.job.single', compact('job', 'jobs', 'alumnis'));
    }
}
