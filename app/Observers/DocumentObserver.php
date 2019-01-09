<?php

namespace App\Observers;

use App\A_content;
use Hatamiarash7\JDF\Generator;

class DocumentObserver
{
    /**
     * Handle the a_content "created" event.
     *
     * @param  \App\A_content $aContent
     * @return void
     */
    public function created(A_content $aContent)
    {
        $jdf = new Generator();
        $aContent->create_date = $jdf->getTimestamp();
    }

    /**
     * Handle the a_content "updated" event.
     *
     * @param  \App\A_content $aContent
     * @return void
     */
    public function updated(A_content $aContent)
    {
        $jdf = new Generator();
        $aContent->update_date = $jdf->getTimestamp();
    }

    /**
     * Handle the a_content "deleted" event.
     *
     * @param  \App\A_content $aContent
     * @return void
     */
    public function deleted(A_content $aContent)
    {
        //
    }

    /**
     * Handle the a_content "restored" event.
     *
     * @param  \App\A_content $aContent
     * @return void
     */
    public function restored(A_content $aContent)
    {
        //
    }

    /**
     * Handle the a_content "force deleted" event.
     *
     * @param  \App\A_content $aContent
     * @return void
     */
    public function forceDeleted(A_content $aContent)
    {
        //
    }
}
