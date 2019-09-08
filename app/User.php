<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Scope a query to only include users of a given username.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  mixed $username
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindByUsername($query, $username)
    {
        return $query->where('username', '=', $username)->first();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
