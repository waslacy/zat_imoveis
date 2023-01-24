<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicaImovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function imovel(){
        return $this->morphToMany(TagImovel::class, 'caracteristica_imovel_id');
    }
}
