<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
    protected $fillable = [
        'nome',
        'especialidade',
        'celular',
        'descricao',
        'foto',
    ];
}
