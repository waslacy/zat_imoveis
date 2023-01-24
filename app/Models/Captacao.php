<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone', 
        'tipo_imovel_id',
        'destinacao',
        'preco', 
        'area_utl',
        'area_total',
        'quartos',
        'suítes',
        'banheiros',
        'salas',
        'vaga de garagem',
        'condominio',
        'iptu',
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'mais_detalhes'
    ];
}
