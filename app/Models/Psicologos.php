<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psicologos extends Model
{
    protected $primaryKey = 'idpsicologa';
    protected $fillable = [
        'nome',
     
    ];
}
