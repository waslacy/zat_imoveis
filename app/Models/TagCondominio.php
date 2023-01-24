<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagCondominio extends Model
{
    use HasFactory;

    protected $fillable = [
        'imovel_id', 'condominio_id', 'caracteristica_condominio_id'
    ];

    public function CaracteristicaCondominio() {
        return $this->morphedByMany(CaracteristicaCondominio::class, 'caracteristica_condominio_id');
    }

    public function imovel() {
        return $this->morphedByMany(Imovel::class, 'imovel_id');
    }

    public function condominio(){
        return $this->morphedByMany(Condominio::class, 'condominio_id');
    }
}
