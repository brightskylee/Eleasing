<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Customers\Customer::class, function (Faker\Generator $faker) {

    return [
        'first_name' => $faker->firstName,
        'middle_initial' => str_random(1),
        'last_name' => $faker->lastName,
        'birthday' => $faker->date('Y-m-d'),
        'gender' => rand(0,1)?('M'):('F')
    ];
});
