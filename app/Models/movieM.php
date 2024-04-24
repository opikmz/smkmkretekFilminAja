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
        'tanggal_keluar',
        'id_sutradara',
        'gambar',
        'keterangan',
    ];
}
