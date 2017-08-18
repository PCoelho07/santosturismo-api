<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cities', function (Blueprint $table) {
            $table->increments('id_city');
            $table->string('name');
            $table->string('abreviation')->nullable();

            $table->integer('state_id')->unsigned();

            $table->timestamps();

            $table->foreign('state_id')
                    ->references('id_state')
                    ->on('tb_states')
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
        Schema::dropIfExists('tb_cities');
    }
}
