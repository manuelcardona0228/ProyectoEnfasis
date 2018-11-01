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
            $table->string('nit',30);
            $table->string('razonSocial',40);
            $table->string('direccion',64);
            $table->string('telefono',10);
            $table->string('sitioWeb',64);
            $table->unsignedInteger('admin_id');
            $table->timestamps();

            $table->foreign('admin_id')
            ->references('id')
            ->on('admins');
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
