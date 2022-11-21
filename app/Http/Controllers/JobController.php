<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Models\People;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Opportunity $job)
    {
        $alumnis = People::where('job_slug', $job->slug)->where('status', 'ancien')->get();
        $jobs = Opportunity::where('id','<>', $job->id)->take(4)->get();
        return view('about.job.single', compact('job', 'jobs', 'alumnis'));
    }
}
