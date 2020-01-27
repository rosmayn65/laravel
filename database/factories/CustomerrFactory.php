<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customerr;
use Faker\Generator as Faker;

$factory->define(Customerr::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->randomNumber,
        'nama' => $faker->name,
        'email' => $faker->email,
        'country' => $faker->country,
        'city' => $faker->city,
        'address' => $faker->address,
        'contact number' => $faker->PhoneNumber
        //
    ];
});
