<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'desciption' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'suppliers_id' => rand(1, 10)
    ];
});
