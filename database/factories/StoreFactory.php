<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Store;
use App\Models\Membership;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    $membership = Membership::all()->pluck('id')->toArray();
    return [
        'registration' => $faker->swiftBicNumber,
        'phone' => $faker->randomNumber(8, false),
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'description' => $faker->text(120),
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'rating' => $faker->numberBetween(0, 10),
        'voted' => $faker->randomNumber(),
        'active' => $faker->boolean(90),
        'city' => $faker->city,
        'location' => $faker->text(200),
        'memberships_id' => $faker->randomElement($membership),
        'expire_at' => $faker->dateTimeBetween('now', '2 years')
    ];
});
