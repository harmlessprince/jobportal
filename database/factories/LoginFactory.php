<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Authority;
use App\Login;
use Faker\Generator as Faker;

$factory->define(Login::class, function (Faker $faker) {
    return [
        //
        'user_name' =>$faker->userName,
        'user_email'    =>  $faker->email,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        'authority_id'  =>  function ()
        {
            return Authority::all()->random();
        },
        'approved'   =>  $faker->boolean($chanceOfGettingTrue = 50),
        'status'   =>  $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
