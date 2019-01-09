<?php

namespace App;

use Hatamiarash7\JDF\Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class N_content extends Model
{
    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class, 'field_id');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(C_category::class, 'cat_id');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function (N_content $n_content) {
            $jdf = new Generator();
            $n_content->create_date = $jdf->getTimestamp();
        });
    }
}
