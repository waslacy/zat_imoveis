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
        Schema::create('captacaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone'); 
            $table->foreignId('tipo_imovel_id')->constrained();
            $table->string('destinacao');
            $table->float('preco'); 
            $table->float('area_utl');
            $table->float('area_total');
            $table->integer('quartos');
            $table->integer('suítes');
            $table->integer('banheiros');
            $table->integer('salas');
            $table->integer('vaga de garagem');
            $table->float('condominio');
            $table->float('iptu');
            $table->string('cep');
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->text('mais_detalhes');
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
        Schema::dropIfExists('captacaos');
    }
};
