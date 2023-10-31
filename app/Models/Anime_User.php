<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime_User extends Model
{
    protected $table = 'anime_user';

    use HasFactory;

    protected $fillable = [ 'anime_id', 'user_id' ];
}
