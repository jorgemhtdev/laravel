<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$faker = Faker\Factory::create('es_ES'); //  instance of a Faker object a Spain

// We’re defining the factory for the App\User class.
$factory->define(App\User::class, function () use ($faker) {

    return [ // The factory function returns an array of column values.
        'name' => $faker->userName,
        'email' => $faker->freeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

// We’re defining the factory for the App\Client class.
$factory->define(App\Client::class, function () use ($faker) {

    return [
        'name' => $faker->firstName,
        'identity_card' =>  $faker->dni, // For the dni, we’ll use a dni from spain.
        'age' => $faker->numberBetween($min = 18, $max = 100), // For the age, we’ll use a random sentence between 18 and 100 numbers.
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->streetAddress,
    ];
});


// We’re defining the factory for the App\Car class.
$factory->define(App\Car::class, function () use ($faker) {

    $clients_ids = \DB::table('clients')->select('id')->get(); // Get all id from the table clients

    return [
        'car_brand' => $faker->randomElement(['audi', 'bmw','opel','seat','honda','mercedes']),
        'price' => $faker->numberBetween($min = 2500, $max = 10000),
        'number_plate' => $faker->dni,
        'color' => $faker->randomElement(['red', 'yellow','blue','white','pink','gray']),
        'clients_id' => $faker->randomElement($clients_ids)->id, //random_int(\DB::table('clients')->min('id'), \DB::table('clients')->max('id'))
    ];
});

// We’re defining the factory for the App\Mechanical class.
$factory->define(App\Mechanical::class, function () use ($faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween($min = 18, $max = 65), // For the age, we’ll use a random sentence between 18 and 100 numbers.
        'salary' => $faker->numberBetween($min = 1500, $max = 5000),
    ];
});

// We’re defining the factory for the App\CarMechanical class.
$factory->define(App\CarMechanical::class, function () use ($faker) {

    $car_ids = \DB::table('cars')->select('id')->get(); // Get all id from the table clients
    $mechanical_ids = \DB::table('mechanical')->select('id')->get(); // Get all id from the table clients

    return [
        'car_id' => $faker->randomElement($car_ids)->id,
        'mechanical_id' => $faker->randomElement($mechanical_ids)->id,
        'hours' => $faker->numberBetween($min = 1, $max = 6),
        'date'=> $faker-> date($format = 'Y-m-d', $max = 'now')
    ];
});