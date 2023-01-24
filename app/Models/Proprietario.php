<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'telefone', 'email', 'notas'
    ];

    public function imovel(){
        return $this->hasMany(Imovel::class);
    }
}
