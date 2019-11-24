<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Stock;
use Faker\Generator as Faker;

$factory->define(Order_detail::class, function (Faker $faker) {
    $orders = Order::all()->pluck('id')->toArray();
    $stocks = Stock::all()->pluck('id')->toArray();

    return [
        'quantity' => $faker->randomDigit,
        'order_id' => $faker->randomElement($orders),
        'stock_id' => $faker->randomElement($stocks)
    ];
});
