<?php

use Illuminate\Database\Seeder;

class CarMechanicalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\CarMechanical',10)->create();
    }
}
