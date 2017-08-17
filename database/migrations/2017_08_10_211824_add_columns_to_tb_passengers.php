<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToTbPassengers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_passengers', function(Blueprint $table) {

            $table->integer('partners_count')->nullable();
            $table->integer('trip_count')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_passengers', function(Blueprint $table) {
            $table->dropColumn('partners_count');
            $table->dropColumn('trip_count');           

        });
    }
}
