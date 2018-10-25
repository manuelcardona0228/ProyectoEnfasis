<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarberiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barberias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit',30)->index();
            $table->string('razonSocial',40);
            $table->string('direccion',64);
            $table->string('telefono',10);
            $table->string('sitioWeb',64);
            $table->string('administrador_documento', 10)->index();
            $table->timestamps();

            $table->foreign('administrador_documento')
            ->references('documento')
            ->on('administradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barberias');
    }
}
