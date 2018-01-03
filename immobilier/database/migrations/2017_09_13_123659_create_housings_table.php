<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->string('street');
            $table->string('building');
            $table->string('flat');
            $table->integer('zipcode');
            $table->string('city');
            $table->integer('area');
            $table->string('type');
            $table->boolean('furnished');
            $table->decimal('price', 5,2);
            $table->string('access');
            $table->integer('room');
            $table->integer('floor');
            $table->string('vehicle');
            $table->integer('bedroom');
            $table->string('description');
            $table->integer('greenhouseGaz');
            $table->string('energeticClass', 1);
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
        Schema::dropIfExists('housings');
    }
}
