<?php

namespace App\Observers;

use App\Field;
use Hatamiarash7\JDF\Generator;

class FieldObserver
{
    /**
     * Handle the field "created" event.
     *
     * @param  \App\Field $field
     * @return void
     */
    public function created(Field $field)
    {
        $jdf = new Generator();
        $field->create_date = $jdf->getTimestamp();
    }

    /**
     * Handle the field "updated" event.
     *
     * @param  \App\Field $field
     * @return void
     */
    public function updated(Field $field)
    {
        $jdf = new Generator();
        $field->update_date = $jdf->getTimestamp();
    }

}
