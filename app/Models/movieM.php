<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movieM extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected $primaryKey = 'id_movie';
    protected $fillable = [
        'judul',
        'direktur',
        'tanggal_keluar',
        'studio_id',
    ];
}
