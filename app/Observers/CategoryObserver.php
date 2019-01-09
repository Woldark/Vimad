<?php

namespace App\Observers;

use App\C_category;
use Hatamiarash7\JDF\Generator;

class CategoryObserver
{
    /**
     * Handle the c_category "created" event.
     *
     * @param  \App\C_category $cCategory
     * @return void
     */
    public function created(C_category $cCategory)
    {
        $jdf = new Generator();
        $cCategory->create_date = $jdf->getTimestamp();
    }

    /**
     * Handle the c_category "updated" event.
     *
     * @param  \App\C_category $cCategory
     * @return void
     */
    public function updated(C_category $cCategory)
    {
        $jdf = new Generator();
        $cCategory->update_date = $jdf->getTimestamp();
    }

}
