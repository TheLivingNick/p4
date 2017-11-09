<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('username');
            $table->string('name');
            $table->string('cover_image')->comment('Expects URL to an image');
            $table->string('street1');
            $table->string('street2');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->text('summary');
            $table->boolean('interest_pc');
            $table->boolean('interest_console');
            $table->boolean('interest_tabletop');
            $table->boolean('interest_board');
            $table->string('event1');
            $table->string('event2');
            $table->string('event3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
