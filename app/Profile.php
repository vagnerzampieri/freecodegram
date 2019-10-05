<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
      return $this->belongsToMany(User::class);
    }

    protected $fillable = [
        'title', 'description', 'url', 'image'
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? '/storage/' . $this->image : '/images/no-image.png';
        return $imagePath;
    }
}
