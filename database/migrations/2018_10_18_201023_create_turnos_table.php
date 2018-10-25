<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->timestamp('fecha');

            $table->string('barbero_documento', 10)->index();

            $table->unsignedInteger('servicio_id');
            
            $table->unsignedInteger('user_id');

            $table->timestamps();

            $table->foreign('barbero_documento')
            ->references('documento')
            ->on('barberos');


            $table->foreign('servicio_id')
                ->references('id')
                ->on('servicios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
}
