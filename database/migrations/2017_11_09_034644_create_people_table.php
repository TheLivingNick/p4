<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('profile_image')->comment('Expects URL to an image');
            $table->string('street1');
            $table->string('street2');
            $table->string('city');
            $table->string('state');
            $table->string('zip', 5)->comment('String to keep preceding 0');
            $table->text('summary');
            $table->boolean('interest_pc');
            $table->boolean('interest_console');
            $table->boolean('interest_tabletop');
            $table->boolean('interest_board');
            $table->string('favorite_pc');
            $table->string('favorite_console');
            $table->string('favorite_tabletop');
            $table->string('favorite_board');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
