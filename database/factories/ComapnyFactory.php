<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Allindustry;
use App\Company;
use App\Login;
use App\State;
use App\User;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        // 'user_id'  =>  $faker->factory(Login::class)->create()->id,
        'user_id'  =>  function ()
        {
            return User::all()->random();
        },
        'name'  =>  $faker->company,
        'phone_number'  =>  $faker->phoneNumber,
        'website'   =>  $faker->url,
        'industry_id'    =>  function ()
        {
            return Allindustry::all()->random();
        },
        'state_id'  =>  function ()
        {
            return State::all()->random();
        },
        'logo'  =>  $faker->imageUrl($width = 150, $height = 150),
        'status'   =>  $faker->boolean($chanceOfGettingTrue = 50),
        'headquarter'   =>  $faker->address
    ];
});
