<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 5),
        'topic_id' => $faker->numberBetween(1, 5),
        'main' => 0,
        'text' => $faker->realText(rand(20, 300) ),
    ];
});
