<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('peso');
            $table->tinyInteger('tipo')->unsigned();
            $table->integer('objectiveEspace_id')->unsigned();
            $table->integer('ability_id')->unsigned();
            $table->timestamps();

            $table->foreign('objectiveEspace_id')->references('id')->on('objectiveEspaces');
            $table->foreign('ability_id')->references('id')->on('abilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weights');
    }
}
