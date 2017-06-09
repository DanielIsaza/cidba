<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspaciosacademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicspaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('numeroCreditos',2);
            $table->string('horasTeoricas',2);
            $table->string('horasPracticas',2);
            $table->string('horasTeoPract',2);
            $table->string('horasAsesorias',2);
            $table->string('horasIndependiente',2);
            $table->boolean('habilitable');
            $table->boolean('validable');
            $table->boolean('homologable');
            $table->string('nucleoTematico',700);
            $table->string('justificacion',700);
            $table->string('metodologia',700);
            $table->string('evaluacion',700);
            $table->string('descripcion',700);
            $table->string('contenidoConceptual',700);
            $table->string('contenidoProcedimental',700);
            $table->string('contenidoActitudinal',700);
            $table->string('procesosIntegrativos',700);

            $table->integer('semester_id')->unsigned();
            $table->integer('activityacademic_id')->unsigned();
            $table->integer('typeevaluation_id')->unsigned();
            $table->integer('typemethodology_id')->unsigned();
            $table->integer('nature_id')->unsigned();

            $table->timestamps();

            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->foreign('activityacademic_id')->references('id')->on('activityacademics');
            $table->foreign('typeevaluation_id')->references('id')->on('typeevaluations');
            $table->foreign('typemethodology_id')->references('id')->on('typemethodologies');
            $table->foreign('nature_id')->references('id')->on('natures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
