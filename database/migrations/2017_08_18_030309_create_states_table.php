<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_states', function (Blueprint $table) {
            $table->increments('id_state');

            $table->string('name');
            $table->string('abrevation')->nullable();

            $table->integer('country_id')->unsigned();

            $table->timestamps();

            $table->foreign('country_id')
                    ->references('id_country')
                    ->on('tb_countries')
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
        Schema::dropIfExists('tb_states');
    }
}
