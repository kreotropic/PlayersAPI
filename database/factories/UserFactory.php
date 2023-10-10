<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use App\Country;
use App\Bicycle;


$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        "last_name" => $faker->lastName,
        "birth_date" => $faker->date,
        "country_id" => factory(App\Country::class),


    ];
});
