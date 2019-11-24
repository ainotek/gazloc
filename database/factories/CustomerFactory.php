    <?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Customer;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;


$factory->define(Customer::class, function (Faker $faker) {
    $device = [
        'Android', 'Iphone', 'browser'
    ];
    return [
        'email' =>$faker->safeEmail,
        'phone' => $faker->randomNumber(8, false),
        'password' => Hash::make('password'),
        'last_password' =>Hash::make('password'),
        'first_name' =>$faker->firstName,
        'last_name' =>$faker->lastName,
        'newsletter' =>$faker->boolean,
        'active' =>$faker->boolean,
        'device' =>$faker->randomElement($device),
        'expire_at' =>$faker->dateTimeBetween('now', '1 years'),
        'last_login' =>$faker->dateTimeThisMonth,
    ];
});
