<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroDirectoriosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_directorios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_local');
            $table->string('nombre_local');
            $table->integer('telefono_contador');
            $table->integer('whatsapp_contador');
            $table->integer('catalogo_contador');
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
        Schema::drop('registro_directorios');
    }
}
