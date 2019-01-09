<?php

namespace App\Observers;

use App\N_content;
use Hatamiarash7\JDF\Generator;

class NewsObserver
{
    /**
     * Handle the n_content "created" event.
     *
     * @param  \App\N_content $nContent
     * @return void
     */
    public function created(N_content $nContent)
    {
        $jdf = new Generator();
        $nContent->create_date = $jdf->getTimestamp();
    }

    /**
     * Handle the n_content "updated" event.
     *
     * @param  \App\N_content $nContent
     * @return void
     */
    public function updated(N_content $nContent)
    {
        $jdf = new Generator();
        $nContent->update_date = $jdf->getTimestamp();
    }

}
