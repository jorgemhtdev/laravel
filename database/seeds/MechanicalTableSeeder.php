<?php

use Illuminate\Database\Seeder;

class MechanicalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Mechanical',10)->create();
    }
}
