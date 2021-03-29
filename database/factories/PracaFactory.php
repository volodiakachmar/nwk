<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Praca;
use Faker\Generator as Faker;

$factory->define(Praca::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'o_pracy' => $faker->sentence
    ];
});
