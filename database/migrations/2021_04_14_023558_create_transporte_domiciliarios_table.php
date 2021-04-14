<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteDomiciliariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporte_domiciliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tipo_vehiculo');
            $table->text('placa');
            $table->integer('id_icono');
            $table->text('nombre');
            $table->text('telefono');
            $table->text('whatsapp');
            $table->text('id_evento');
            $table->integer('id_horario');
            $table->text('id_municipio');
            $table->integer('habilitado');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
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
        Schema::drop('transporte_domiciliarios');
    }
}
