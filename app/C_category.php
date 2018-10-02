<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class C_category extends Model
{
    public function c_contents(): HasMany
    {
        return $this->hasMany(C_content::class, 'category_id');
    }

    public function a_contents(): HasMany
    {
        return $this->hasMany(A_content::class, 'cat_id');
    }

    public function n_contents(): HasMany
    {
        return $this->hasMany(N_content::class, 'cat_id');
    }
}
