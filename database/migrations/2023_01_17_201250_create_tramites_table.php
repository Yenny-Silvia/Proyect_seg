<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->id('id');
            $table->string('referencias')->nullable();
            $table->integer('Hojas');
            $table->string('remitente');
            $table->integer('nro_concejo')->nullable();
            $table->unsignedBigInteger('id_subtipotramite');
            $table->unsignedBigInteger('id_tipotramite');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('id_subtipotramite')
                  ->references('id')
                  ->on('subtipotramites');

            $table->foreign('id_tipotramite')
                  ->references('id')
                  ->on('tipotramites');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramites');
    }
}
