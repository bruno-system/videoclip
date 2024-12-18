<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\movie;
use Faker\Generator as Faker;

$factory->define(movie::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'img' => $faker->word,
        'video' => $faker->word,
        'description' => $faker->text,
        'show' => $faker->randomDigitNotNull,
        'id_category' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
