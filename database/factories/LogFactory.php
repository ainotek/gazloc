<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Log;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    $actions = ['CREATE', 'UPDATE', 'DELETE'] ;
    $actions_type = ['STORE', 'USER', 'CUSTOMER', 'SERVICE', 'SUPPLIER', 'ORDER'] ;
    $status = ['SUCCESS', 'FAILED', 'IN PROGRESS', 'PENDING'];
    $user_id = User::all()->pluck('id')->toArray();
    return [
        'action'=>$faker->randomElement($actions),
        'object_type'=>$faker->randomElement($actions_type),
        'status'=>$faker->randomElement($status),
        'message'=>$faker->text(100),
        'users_id'=>$faker->randomElement($user_id)
    ];
});
