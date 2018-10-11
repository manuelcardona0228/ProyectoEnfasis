<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarberosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barberos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento', 10)->index();
            $table->string('nombres',40);
            $table->string('apellidos',40);
            $table->string('telefono',13);
            $table->string('correo',64);
            $table->timestamp('fechaNac');
            $table->integer('calificacion');
            $table->string('nameUser',20);
            $table->string('password',10);

            $table->string('sede_nit', 30)->index();

            $table->timestamps();

            $table->foreign('sede_nit')
            ->references('nit')
            ->on('sedes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barberos');
    }
}
