<?php

use Faker\Generator as Faker;
use App\Car;

$factory->define(App\Car::class, function (Faker $faker) {

        $make = $faker->randomelement(['Ford', 'Toyota', 'Honda']);
        $model = $faker->randomelement(['Branco', 'Camery', 'Civic']);
        $model_year = $faker->randomElement([1990,2017,2018]);
        return [
        'make' => $make,
        'model' => $model,
        'model_year' => $model_year,
    ];
});