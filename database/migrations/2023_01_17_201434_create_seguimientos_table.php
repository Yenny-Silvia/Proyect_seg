<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id('id');
            $table->date('fecha');
            $table->string('recepcion')->nullable();
            $table->unsignedBigInteger('id_tramite');
            $table->unsignedBigInteger('id_dependenciaDestino');
            $table->unsignedBigInteger('id_dependenciaOrigen');
            $table->timestamps();

            $table->foreign('id_tramite')
                  ->references('id')
                  ->on('tramites');

                  $table->foreign('id_dependenciaDestino')
                  ->references('id')
                  ->on('dependencias');

                  $table->foreign('id_dependenciaOrigen')
                  ->references('id')
                  ->on('dependencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos');
    }
}
