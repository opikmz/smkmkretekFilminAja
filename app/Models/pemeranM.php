<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeranM extends Model
{
    use HasFactory;
    protected $table = 'pemeran';
    protected $primaryKey = 'id_pemeran';
    protected $fillable = [
        'pemeran'
    ];
}
