<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function imovel(){
        return $this->hasMany(Imovel::class);
    }
}
