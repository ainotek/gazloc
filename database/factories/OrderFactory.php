<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $customer_id = Customer::all()->pluck('id')->toArray();
    return [
        'customers_id'=>$faker->randomElement($customer_id),
        'state'=>$faker->text,
        'order_number'=>$faker->randomNumber()
    ];
});
