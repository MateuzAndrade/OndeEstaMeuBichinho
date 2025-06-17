<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bichinho extends Model
{
    protected $fillable = [
        'nome',
        'raca',
        'descricao',
        'ultimo_local',
        'foto',
        'nome_responsavel',
        'telefone',
        'email',
    ];
}
