<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\configuration;
use Faker\Generator as Faker;

$factory->define(configuration::class, function (Faker $faker) {

    return [
        'direccion' => $faker->text,
        'email' => $faker->word,
        'phone' => $faker->word,
        'horarios' => $faker->text,
        'facebook' => $faker->word,
        'instagram' => $faker->word,
        'social' => $faker->word,
        'mensaje' => $faker->word,
        'popup' => $faker->word,
        'paginateA' => $faker->randomDigitNotNull,
        'paginateB' => $faker->word,
        'style' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
