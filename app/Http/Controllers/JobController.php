<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
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

        $locales = [];
        $job = Opportunity::find($job->opportunity_id);
        foreach ($job->translation as $job_ref){
                $locales[] = $job_ref;
        }
        $job = $job->translation->where('locale',$locale)->first();

        //$alumnis = People::where('job_slug', $job->slug)->where('status', 'ancien')->get();
        $alumnis = People::all();
        $jobs = Opportunity::where('id','<>', $job->opportunity_id)->take(4)->get();
        return view('about.job.single', compact('job', 'jobs', 'locales','alumnis'));
    }
}
