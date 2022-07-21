<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteAluno extends Model
{
    protected $table='paciente_alunos';
    protected $primaryKey = 'idPaciente';
    protected $fillable = [
        'idaluno',
        'stats',
        'avaliacaofinal',
    ];
}
