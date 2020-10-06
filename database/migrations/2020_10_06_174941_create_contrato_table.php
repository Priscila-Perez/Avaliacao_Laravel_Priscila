<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->id('id_contrato');
            $table->string('tipo_contrato');
            $table->string('nome_envolvido_1');
            $table->string('nome_envolvido_2');
            $table->date('data_contrato');
            $table->decimal('valor', 6, 2);
            $table->string('nome_tabeliao');
            $table->foreign('nome_tabeliao')->references('nome')->on('tabeliao');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrato');
    }
}
