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

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }

    public function animes()
    {
        return $this->belongsToMany(Anime::class, 'anime_id', 'id');
    }
}
