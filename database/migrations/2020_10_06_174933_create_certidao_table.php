<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertidaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidao', function (Blueprint $table) {
            $table->id('id_certidao');
            $table->string('tipo_certidao');
            $table->string('nome_envolvido_1');
            $table->string('nome_envolvido_2');
            $table->date('data_certidao');
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
        Schema::dropIfExists('certidao');
    }
}
