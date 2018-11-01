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

            $table->string('nit',30);
            $table->string('razonSocial',40);
            $table->string('direccion',64);
            $table->string('telefono',10);

            $table->unsignedInteger('barberia_id');
            $table->unsignedInteger('admin_id');

            $table->timestamps();

            $table->foreign('barberia_id')
            ->references('id')
            ->on('barberias');


            $table->foreign('admin_id')
            ->references('id')
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