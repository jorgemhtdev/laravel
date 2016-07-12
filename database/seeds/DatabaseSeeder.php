<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(MechanicalTableSeeder::class);
        $this->call(CarMechanicalTableSeeder::class);

        Model::reguard();
    }
}
