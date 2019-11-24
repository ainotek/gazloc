<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hour;
use App\Models\Store;
use Faker\Generator as Faker;

$factory->define(Hour::class, function (Faker $faker) {
    $stores = Store::all()->pluck('id')->toArray();
    $days = [1, 2, 3, 4, 5, 6, 7];
    $result = [];
    foreach ($stores as $store){
        foreach ($days as $day){
            array_push($result,
                [
                    'store_id'=> $store,
                    'day'=> $day,
                    'open'=>'07:30:00',
                    'close'=>'20:30:00'
                ]);
        }
    }
    return $result;
});
