<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bph extends Model
{
    use HasFactory;

    protected $table = 'bph';

    protected $fillable = [
        'nama',
        'jabatan',
        'periode',
        'id_status',
        'foto_bph'
    ];

    protected $hidden = [
        'id'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
