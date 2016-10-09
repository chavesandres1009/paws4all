<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('adopcion');
            $table->double('aporte');
            $table->integer('mascota_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('mascota_id')->references('id')
                                         ->on('mascotas')
                                         ->onDelete('cascade');
            $table->foreign('user_id')->references('id')
                                         ->on('users')
                                         ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_mascotas');
    }
}
