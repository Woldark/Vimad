<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    public function authors(): HasMany
    {
        return $this->hasMany(Author::class, 'job_id');
    }

    public function c_contents(): HasMany
    {
        return $this->hasMany(C_content::class, 'job_id');
    }

    public function a_contents(): HasMany
    {
        return $this->hasMany(A_content::class, 'job_id');
    }

    public function n_contents(): HasMany
    {
        return $this->hasMany(N_content::class, 'job_id');
    }
}
