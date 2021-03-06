<?php

namespace App;

use Hatamiarash7\JDF\Generator;
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

    public static function boot()
    {
        parent::boot();
        static::creating(function (C_category $c_category) {
            $jdf = new Generator();
            $c_category->create_date = $jdf->getTimestamp();
        });
    }
}
