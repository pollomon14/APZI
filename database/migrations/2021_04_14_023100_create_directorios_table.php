<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoriosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorios', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->integer('id_categoria');
            $table->integer('id_subcategoria');
            $table->text('direccion');
            $table->text('responsable');
            $table->integer('domicilio');
            $table->text('descripcion');
            $table->text('ubicacion');
            $table->integer('id_horario');
            $table->integer('tipo_de_plan');
            $table->text('telefono');
            $table->text('whatsapp');
            $table->text('facebook');
            $table->text('instagram');
            $table->text('linkedin');
            $table->text('pagina');
            $table->text('correo');
            $table->text('catalogo');
            $table->text('video');
            $table->text('imagen1');
            $table->text('imagen2');
            $table->text('imagen3');
            $table->text('imagen4');
            $table->text('imagen5');
            $table->text('imagen6');
            $table->text('imagen7');
            $table->text('imagen8');
            $table->text('imagen9');
            $table->text('imagen10');
            $table->text('id_evento');
            $table->text('logo');
            $table->integer('habilitado');
            $table->integer('visitas');
            $table->integer('cant_visitas');
            $table->text('palabras_clave');
            $table->text('id_municipio');
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
        Schema::drop('directorios');
    }
}
