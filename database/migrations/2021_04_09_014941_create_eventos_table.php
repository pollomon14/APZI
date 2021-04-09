<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('link');
            $table->string('id_icono');
            $table->string('texto_boton');
            $table->integer('id_municipio');
            $table->integer('habilitado');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('tipo');
            $table->integer('id_destacado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eventos');
    }
}
