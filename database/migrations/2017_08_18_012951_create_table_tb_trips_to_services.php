<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTbTripsToServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_trips_services', function(Blueprint $table) {
            $table->increments('id_trip_services');

            $table->integer('service_id')->unsigned();
            $table->integer('trip_id')->unsigned();

            $table->timestamps();

            $table->foreign('service_id')
                    ->references('id_services')
                    ->on('tb_services')
                    ->onDelete('cascade');

            $table->foreign('trip_id')
                    ->references('id_trips')
                    ->on('tb_trips')
                    ->onDelete('cascade');

            $table->unique(['trip_id', 'service_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_trips_services');
    }
}
