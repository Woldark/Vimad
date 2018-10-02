<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class N_comment extends Model
{
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
