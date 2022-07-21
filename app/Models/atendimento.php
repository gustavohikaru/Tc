<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atendimento extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'idpacientealuno',
        'idpsi',
        'data',
        'horario',
        'indicacao',
        'observacoes',
    ];
}
