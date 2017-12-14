<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsitems', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('location_id')->unsigned();
            $table->string('name');
            $table->string('url');

            #set location_id as foreign key
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsitems');
    }
}
