<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genreMovieM extends Model
{
    use HasFactory;
    protected $table = 'genre_movie';
    protected $fillable = [
        'id_movie',
        'id_genre',
    ];
}
