<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_person', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('event_id')->unsigned();
            $table->integer('person_id')->unsigned();

            # Make foreign keys
            $table->foreign('event_id')->references('id')->on('events');
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
        Schema::dropIfExists('event_person');
    }
}
