<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimePendingUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'anime_id',
    ];

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function anime()
    {
        return $this->hasMany('App\Models\Anime');
    }
}
