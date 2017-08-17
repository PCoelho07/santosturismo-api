<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_trips', function (Blueprint $table) {
            $table->increments('id_trips');
            $table->datetime('exit_date');
            $table->datetime('arrival_date');
            $table->integer('passengers_qtt');
            $table->integer('city_destination')->unique();
            $table->integer('city_origin')->unique();
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
        Schema::dropIfExists('tb_trips');
    }
}
