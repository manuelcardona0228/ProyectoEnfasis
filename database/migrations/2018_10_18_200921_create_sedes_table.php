<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nit',30)->index();
            $table->string('razonSocial',40);
            $table->string('direccion',64);
            $table->string('telefono',10);

            $table->string('barberia_nit', 30)->index();
            $table->string('admin_documento', 10)->index();

            $table->timestamps();

            $table->foreign('barberia_nit')
            ->references('nit')
            ->on('barberias');


            $table->foreign('admin_documento')
            ->references('documento')
            ->on('admins');

            /**
             * $table->foreign('administrador_documento)
             * ->references('documento')
             * ->on('administradores')
             * onDelete('cascade')
             * onUpdate('cascade')
             */
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sedes');
    }
}