<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class A_comment extends Model
{
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function a_content(): BelongsTo
    {
        return $this->belongsTo(A_content::class,'cont_id');
    }
}

