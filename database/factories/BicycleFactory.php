<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use Faker\Generator as Faker;
use App\User;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        "brand" => $faker->word,
        "model" => $faker->word,
        "color" => $faker->colorName,
        "price" => $faker->randomFloat(2, 100, 1000),
        "user_id" => factory(App\User::class),
    ];
});
