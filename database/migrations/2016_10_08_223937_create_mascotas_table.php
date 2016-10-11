<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raza')->nullable();
            $table->integer('edad');
            $table->string('tipo');
            $table->string('estado');
            $table->float('tamano');
            $table->string('imagen')->nullable();
            $table->integer('refugio_id')->unsigned()->nullable();
            $table->foreign('refugio_id')->references('id')
                                         ->on('refugios')
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
        Schema::dropIfExists('mascotas');
    }
}
