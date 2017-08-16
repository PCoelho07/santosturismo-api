<?php

use Illuminate\Database\Seeder;

class PassengerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Passenger::class, 30)->create();
    }
}
