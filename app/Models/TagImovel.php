<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagImovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'imovel_id', 'caracteristica_imovel_id'
    ];

    public function CaracteristicaImovel() {
        return $this->morphedByMany(CaracteristicaImovel::class, 'caracteristica_imovel_id');
    }

    public function imovel() {
        return $this->morphedByMany(Imovel::class, 'imovel_id');
    }
}
