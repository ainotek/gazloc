<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $customers = Customer::all()->pluck('id')->toArray();
    $states = ['Delivered', 'Packaging', 'Hold', 'Cancel'];
    return [
        'customer_id'=>$faker->randomElement($customers),
        'state'=>$faker->randomElement($states),
        'order_number'=>$faker->swiftBicNumber
    ];
});
