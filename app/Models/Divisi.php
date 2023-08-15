<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';

    protected $fillable = [
        'divisi',
    ];

    protected $hidden = [
        'id'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
