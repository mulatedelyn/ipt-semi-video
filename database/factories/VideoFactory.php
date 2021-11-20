<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->sentence(),
        'duration' => $faker->numberBetween(1,60),
        'rating' => $faker->numberBetween(1,10)
    ];
});
