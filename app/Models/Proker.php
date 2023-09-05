<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    use HasFactory;

    protected $table = 'proker';

    protected $fillable = [
        'proker',
        'thumbnail',
        'tanggal_pelaksanaan',
        'id_divisi'
    ];

    protected $hidden = [
        'id'
    ];
}
