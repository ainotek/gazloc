<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hour;
use App\Models\Store;
use Faker\Generator as Faker;

$factory->define(Hour::class, function (Faker $faker) {
    $store_id = Store::all()->pluck('id')->toArray();
    $days = [1, 2, 3, 4, 5, 6, 7];
    return [
            'stores_id'=>$faker->randomElement($store_id),
            'day'=>$faker->randomElement($days),
            'open'=>'08:00:00',
            'close'=>'21:00:00'
    ];
});
