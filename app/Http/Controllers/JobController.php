<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Models\People;
use App\Models\OpportunityTranslation;
use App\Models\PersonTranslation;


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

        $locales = [];
        $alumnis = [];
        $job = Opportunity::find($job->opportunity_id);
        foreach ($job->translation as $job_ref){
                $locales[] = $job_ref;
        }
        $job = $job->translation->where('locale',$locale)->first();

        $alumnis_ref = PersonTranslation::where('job_slug', $job->slug)->where('locale',$locale)->where('status', 'ancien')->get();
        foreach ($alumnis_ref as $alumni){
            $alumnis [] = People::find($alumni->people_id);
        }

//        $alumnis = People::all();
        $jobs = Opportunity::where('id','<>', $job->opportunity_id)->take(4)->get();
        return view('about.job.single', compact('job', 'jobs', 'locales','alumnis'));
    }
}
