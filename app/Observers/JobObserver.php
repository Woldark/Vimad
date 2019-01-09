<?php

namespace App\Observers;

use App\Job;
use Hatamiarash7\JDF\Generator;

class JobObserver
{
    /**
     * Handle the job "created" event.
     *
     * @param  \App\Job $job
     * @return void
     */
    public function created(Job $job)
    {
        $jdf = new Generator();
        $job->create_date = $jdf->getTimestamp();
    }

    /**
     * Handle the job "updated" event.
     *
     * @param  \App\Job $job
     * @return void
     */
    public function updated(Job $job)
    {
        $jdf = new Generator();
        $job->update_date = $jdf->getTimestamp();
    }

}
