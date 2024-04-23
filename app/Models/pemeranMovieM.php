<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeranMovieM extends Model
{
    use HasFactory;
    protected $table = 'pemeran_movie';
    protected $fillable = [
        'id_movie',
        'id_pemeran',
        'id_user',
    ];
}
