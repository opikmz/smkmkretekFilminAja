<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscribeM extends Model
{
    use HasFactory;
    protected $table = 'subscribe';
    protected $fillable = [
        'id_movie',
        'id_user',
    ];
}
