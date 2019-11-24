<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Offered_service;
use App\Models\Service;
use App\Models\Store;
use Faker\Generator as Faker;

$factory->define(Offered_service::class, function (Faker $faker) {
    $stores = Store::all()->pluck('id')->toArray();
    $services = Service::all()->pluck('id')->toArray();
    $prices = [1000, 1500, 2000, 2500, 3000, 5000, 8000, 10000];

    return [
        'service_id' => $faker->randomElement($services),
        'store_id' => $faker->randomElement($stores),
        'active' => $faker->boolean,
        'price' => $faker->randomElement($prices)
    ];
});
