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

    public function following()
    {
      return $this->belongsToMany(Profile::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->profile()->create([
                'title' => $user->username,
            ]);
        });
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
        return $query->where('username', '=', $username)->firstOrFail();
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
