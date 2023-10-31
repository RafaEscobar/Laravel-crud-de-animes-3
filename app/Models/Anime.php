<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'anime_portada_path',
        'genere',
        'seasonCount',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
