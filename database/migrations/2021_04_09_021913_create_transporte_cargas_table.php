<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteCargasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporte_cargas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->integer('id_icono');
            $table->string('nombre');
            $table->string('carroceria');
            $table->string('capacidad');
            $table->integer('telefono');
            $table->string('whatsapp');
            $table->integer('id_horario');
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
        Schema::drop('transporte_cargas');
    }
}
