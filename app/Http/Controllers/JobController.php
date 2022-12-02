<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Models\People;


class JobController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale = null, Opportunity $job)
    {
        if (in_array($locale, config('app.available_locales'))){
            app()->setLocale($locale);
        }
        $alumnis = People::where('job_slug', $job->slug)->where('status', 'ancien')->get();
        $jobs = Opportunity::where('id','<>', $job->id)->take(4)->get();
        return view('about.job.single', compact('job', 'jobs', 'alumnis'));
    }
}
