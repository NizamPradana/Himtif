<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProker extends Model
{
    use HasFactory;

    protected $table = 'detail_proker';

    protected $fillable = [
        'id_proker',
        'detail',
        'foto',
    ];

    protected $hidden = [
        'id'
    ];
}
