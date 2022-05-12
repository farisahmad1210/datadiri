<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedulidiri extends Model
{
    use HasFactory;

    protected $table = 'pedulidiri';
    protected $fillable = [
        'id_user',
        'tanggal',
        'lokasi',
        'suhu'
    ];
}

