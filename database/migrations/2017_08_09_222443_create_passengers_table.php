<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_passengers', function (Blueprint $table) {
            $table->increments('id_passengers');
            $table->integer('people_id')->unsigned();
            $table->timestamps();

            $table->foreign('people_id')
                    ->references('id_people')
                    ->on('tb_people')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_passengers');
    }
}
