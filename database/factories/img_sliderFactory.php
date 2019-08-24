<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\img_slider;
use Faker\Generator as Faker;

$factory->define(img_slider::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'img' => $faker->word,
        'description' => $faker->text,
        'show' => $faker->randomDigitNotNull,
        'id_user' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
