<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); 
            $table->text('descricao'); 
            $table->float('preco_venda'); 
            $table->float('preco_venda_promocional'); 
            $table->float('preco_anual'); 
            $table->float('preco_anual_promocional'); 
            $table->float('preco_temporada'); 
            $table->float('preco_temporada_promocional'); 
            $table->float('area_utl');
            $table->float('area_total');
            $table->float('area_terreno');
            $table->integer('quartos');
            $table->integer('suítes');
            $table->integer('banheiros');
            $table->integer('salas');
            $table->integer('vaga de garagem');
            $table->integer('ano de construcao');
            $table->string('referencia');
            $table->foreignId('proprietario_id')->constrained();
            $table->float('condominio');
            $table->float('iptu');
            $table->foreignId('condominio_id')->constrained();
            $table->string('cep');
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->foreignId('regiao_id')->constrained();
            $table->string('cidade');
            $table->string('estado');
            $table->boolean('destaque');
            $table->string('imagem_principal');
            $table->text('notas');
            $table->foreignId('tipo_imovel_id')->constrained();
            $table->boolean('ativo');
            $table->string('destinacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovels');
    }
};
