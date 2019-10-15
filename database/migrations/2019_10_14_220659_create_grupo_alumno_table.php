<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_alumno', function (Blueprint $table) {
            $table->bigIncrements('gra_id');

            $table->unsignedBigInteger('gru_id');
            $table->foreign('gru_id')->references('gru_id')->on('grupo');

            $table->unsignedBigInteger('alu_id');
            $table->foreign('alu_id')->references('alu_id')->on('alumno');

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
        Schema::dropIfExists('grupo_alumno');
    }
}