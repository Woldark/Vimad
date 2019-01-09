<?php

namespace App;

use Hatamiarash7\JDF\Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Field extends Model
{
    public function authors(): HasMany
    {
        return $this->hasMany(Author::class, 'field_id');
    }

    public function c_contents(): HasMany
    {
        return $this->hasMany(C_content::class, 'field_id');
    }

    public function a_contents(): HasMany
    {
        return $this->hasMany(A_content::class, 'field_id');
    }

    public function n_contents(): HasMany
    {
        return $this->hasMany(N_content::class, 'field_id');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function (Field $field) {
            $jdf = new Generator();
            $field->create_date = $jdf->getTimestamp();
        });
    }

}
