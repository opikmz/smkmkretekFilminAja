<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sutradaraM extends Model
{
    use HasFactory;
    protected $table = 'sutradara';
    protected $primaryKey = 'id_sutradara';
    protected $fillable = [
        'sutradara'
    ];
}
