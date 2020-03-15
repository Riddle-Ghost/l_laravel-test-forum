<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(rand(10, 20) ),
        'description' => $faker->realText(rand(20, 50) ),
    ];
});
