<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefugiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('direccion');
            $table->text('descripcion')->nullable();
            $table->text('logo')->nullable();
            $table->text('telefono');
            $table->text('email');
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
        Schema::dropIfExists('refugios');
    }
}
