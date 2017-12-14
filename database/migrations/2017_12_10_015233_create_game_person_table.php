<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_person', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('game_id')->unsigned();
            $table->integer('person_id')->unsigned();

            # Make foreign keys
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('person_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_person');
    }
}
