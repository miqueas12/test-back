<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
	//apenas campos editaveis
    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];
}
