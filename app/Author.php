<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class, 'field_id');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'field_id');
    }

    public function c_contents(): HasMany
    {
        return $this->hasMany(C_content::class, 'author_id');
    }

    public function a_contents(): HasMany
    {
        return $this->hasMany(A_content::class, 'author_id');
    }
}
