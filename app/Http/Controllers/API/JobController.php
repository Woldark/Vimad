<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return response()->json([
            'error' => false,
            'jobs' => $jobs
        ], 200);
    }

    public function show($job)
    {
        $job = Job::find($job);

        return response()->json([
            'error' => false,
            'job' => $job
        ], 200);
    }
}
