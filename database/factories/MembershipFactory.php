<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Membership;
use Faker\Generator as Faker;

$factory->define(Membership::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text(200),
        'price' => $faker->randomNumber(4, false),
        'active' => $faker->boolean(50)
    ];
});
