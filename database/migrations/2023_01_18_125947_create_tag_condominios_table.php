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
        Schema::create('tag_condominios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imovel_id')->constrained()->nullable();
            $table->foreignId('condominio_id')->constrained()->nullable();
            $table->foreignId('caracteristica_condominio_id')->constrained();
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
        Schema::dropIfExists('tag_condominios');
    }
};
