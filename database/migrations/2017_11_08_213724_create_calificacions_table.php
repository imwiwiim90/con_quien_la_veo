<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_calificado');
            $table->integer('id_usuario');
            $table->string('tipo');
            $table->string('comentario');
            $table->integer('valoracion');
            $table->float('c1');
            $table->float('c2');
            $table->float('c3');
            $table->float('c4');
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
        Schema::dropIfExists('calificacions');
    }
}
