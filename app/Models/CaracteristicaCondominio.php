<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicaCondominio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function imovel(){
        return $this->morphToMany(TagCondominio::class, 'caracteristica_condominio_id');
    }
}
