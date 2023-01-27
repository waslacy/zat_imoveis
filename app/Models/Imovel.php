<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao', 
        'preco_venda', 
        'preco_venda_promocional', 
        'preco_anual', 
        'preco_anual_promocional', 
        'preco_temporada', 
        'preco_temporada_promocional', 
        'area_utl',
        'area_total',
        'area_terreno',
        'quartos',
        'suítes',
        'banheiros',
        'salas',
        'vaga de garagem',
        'ano de construcao',
        'referencia',
        'proprietario_id',
        'condominio',
        'iptu',
        'condominio_id',
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'regiao_id',
        'cidade',
        'estado',
        'destaque',
        'imagem_principal',
        'notas',
        'tipo_imovel_id',
        'ativo',
        'destinacao',
    ];

    public function imagem(){
        return $this->hasMany(Imagem::class);
    }

    public function proprietario(){
        return $this->belongsTo(Proprietario::class);
    }

    public function regiao(){
        return $this->belongsTo(Regiao::class);
    }

    public function caracteristicaImovel(){
        return $this->morphToMany(TagImovel::class, 'imovel_id');
    }

    public function caracteristicaCondominio(){
        return $this->morphToMany(TagCondominio::class, 'imovel_id');
    }

    public function condominio(){
        return $this->belongsTo(Condominio::class);
    }
}
