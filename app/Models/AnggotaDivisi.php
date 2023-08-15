<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaDivisi extends Model
{
    use HasFactory;

    protected $table = 'anggota_divisi';

    protected $fillable = [
        'id_divisi',
        'nama',
        'jabatan',
        'periode',
        'id_status',
        'foto_anggota',
    ];

    protected $hidden = [
        'id'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
