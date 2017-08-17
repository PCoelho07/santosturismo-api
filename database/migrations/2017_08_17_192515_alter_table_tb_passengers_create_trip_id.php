<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableTbPassengersCreateTripId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_passengers', function(Blueprint $table) {
            $table->integer('trip_id')->unsigned();
            
            $table->foreign('trip_id')
                    ->references('id_trips')
                    ->on('tb_trips')
                    ->onDelete('cascade');

            $table->dropColumn('trip_count');
            $table->unique(['people_id', 'trip_id']);
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_passengers', function(Blueprint $table){
            $table->dropColumn('trip_id');
            $table->integer('trip_count'); 
        });
    }
}
