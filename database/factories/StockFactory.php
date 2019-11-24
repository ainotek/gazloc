<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\Stock;
use App\Models\Store;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    $products = Product::all()->pluck('id')->toArray();
    $stores = Store::all()->pluck('id')->toArray();
    $prices = [2000, 5000, 12000, 24000, 30000];

    return [
        'product_id' => $faker->randomElement($products),
        'store_id' => $faker->randomElement($stores),
        'active' => $faker->boolean,
        'quantity' => $faker->randomDigit,
        'price' => $faker->randomElement($prices)
    ];
});
