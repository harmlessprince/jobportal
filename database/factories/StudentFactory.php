<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Allfunction;
use App\Allindustry;
use App\Availability;
use App\Experience;
use App\Login;
use App\Student;
use App\User;
use App\Worktype;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' =>  $faker->lastName,
        'othername' => $faker->lastName,
        'phone_number' => $faker->phoneNumber,
        'birthday'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'badge'     => $faker->boolean($chanceOfGettingTrue = 50),
        'about_me'  => $faker->text($maxNbChars = 150) ,
        'salary_expectation' => $faker->numberBetween($min = 1000, $max = 9000),
        'portfolio' => $faker->url,
        'cover_letter' => $faker->text($maxNbChars = 250) ,
        'user_id'   => function () {
            return User::all()->random();
        },

        'function_id'   => function () {
            return Allfunction::all()->random();
        },
        'industry_id'   =>  function () {
            return Allindustry::all()->random();
        },
        'experience_id' => function () {
            return Experience::all()->random();
        },
        'availabilty_id' => function () {
            return Availability::all()->random();
        },
        'worktype_id'  => function () {
            return Worktype::all()->random();
        },

    ];
});
