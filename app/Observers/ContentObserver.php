<?php

namespace App\Observers;

use App\C_content;
use Hatamiarash7\JDF\Generator;

class ContentObserver
{
    /**
     * Handle the c_content "created" event.
     *
     * @param  \App\C_content $cContent
     * @return void
     */
    public function created(C_content $cContent)
    {
        $jdf = new Generator();
        $cContent->create_date = $jdf->getTimestamp();
    }

    /**
     * Handle the c_content "updated" event.
     *
     * @param  \App\C_content $cContent
     * @return void
     */
    public function updated(C_content $cContent)
    {
        $jdf = new Generator();
        $cContent->update_date = $jdf->getTimestamp();
    }

}
