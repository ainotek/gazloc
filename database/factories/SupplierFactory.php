<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'phone' => $faker->randomNumber(8, false),
        'email' => $faker->safeEmail,
        'active' => $faker->boolean,
        'logo' => ('https://upload.wikimedia.org/wikipedia/fr/thumb/e/e8/Shell_logo.svg/1200px-Shell_logo.svg.png')
    ];
});
