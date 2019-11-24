<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Store;
use App\Models\Membership;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'phone' => $faker->randomNumber(8, false),
        'name' => $faker->word,
        'email' => $faker->safeEmail,
        'description' => $faker->text(120),
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'rating' => $faker->numberBetween(0, 10),
        'voted' => $faker->randomNumber(),
        'active' => $faker->boolean(90),
        'city' => $faker->city,
        'location' => $faker->word,
        'picture'=>$faker->imageUrl($width = 640, $height = 480),
        'expire_at' => $faker->dateTimeBetween('now', '2 years')
    ];
});
