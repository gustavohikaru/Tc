<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $primaryKey = 'matricula';
    public $incrementing = false;

    protected $fillable = [
        'matricula',
        'nome',
        'datadenascimento',
        'email',
    ];

}
