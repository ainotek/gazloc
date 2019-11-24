<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Product;
use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $suppliers = Supplier::all()->pluck('id')->toArray();

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'supplier_id' => $faker->randomElement($suppliers),
        'picture' => 'http://atlas-content-cdn.pixelsquid.com/stock-images/gas-cylinder-5A0wywE-600.jpg'
    ];
});
