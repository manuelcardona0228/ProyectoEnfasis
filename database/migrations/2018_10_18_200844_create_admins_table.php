<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento', 10);
            $table->string('nombres', 40);
            $table->String('apellidos', 40);
            $table->String('telefono', 13);
            $table->String('email', 64)->unique();
            $table->date('fechaNac');
            $table->String('nameUser', 20);
            $table->String('password');
            $table->unsignedInteger('cargo_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('cargo_id')
                ->references('id')
                ->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
