<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {

    return [
        'user_id' => $faker->numberBetween(1, 5),
        'category_id' => $faker->numberBetween(1, 5),
        'title' => $faker->realText(rand(20, 50) ),
    ];
});
