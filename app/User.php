<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    public function n_comments(): HasMany
    {
        return $this->hasMany(N_comment::class, 'user_id');
    }

    public function c_comments(): HasMany
    {
        return $this->hasMany(C_comment::class, 'user_id');
    }

    public function a_comments(): HasMany
    {
        return $this->hasMany(A_comment::class, 'user_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
