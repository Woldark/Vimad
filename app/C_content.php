<?php

namespace App;

use Hatamiarash7\JDF\Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class C_content extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(C_category::class, 'category_id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class, 'field_id');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function c_comments(): HasMany
    {
        return $this->hasMany(C_comment::class, 'content_id');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function (C_content $c_content) {
            $jdf = new Generator();
            $c_content->create_date = $jdf->getTimestamp();
        });
    }
}
