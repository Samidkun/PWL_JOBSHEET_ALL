<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_level extends Model
{
    // use HasFactory;
    use HasFactory;

    //nama tabke
    protected $table = 'm_level'; 
    //KOLOM YANG MAU DI ISI
    protected $fillable = [
        'level_id',
        'level_kode',
        'level_nama',
    ];
}
