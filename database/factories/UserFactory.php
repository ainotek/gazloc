<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Store;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $role=['SUPERADMIN', 'ADMIN', 'MERCHANT'];
    $status=['ACTIVE', 'BLOCKED', 'DEACTIVATED', 'DELETED', 'EXPIRE'];
    $stores = Store::all()->pluck('id')->toArray();

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('password'), // password
        'remember_token' => Str::random(10),
        'role' => $faker->randomElement($role),
        'phone' => $faker->randomNumber(8, false),
        'active' => $faker->boolean,
        'last_login' => $faker->dateTimeThisMonth,
        'expire_at' => $faker->dateTimeBetween('now', '2 years'),
        'picture' => ("https://randomuser.me/api/portraits/men/{$faker->randomNumber()}.jpg"),
        'store_id' => $faker->randomElement($stores),
        'status' => $faker->randomElement($status)
    ];
});
