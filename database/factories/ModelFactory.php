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

use App\Models\Customers\Customer as Customer;
use App\Models\Customers\EmailAddress as EmailAddress;
use App\Models\Customers\EmailAddressType as EmailAddressType;
use App\Models\Customers\PhoneNumber as PhoneNumber;
use App\Models\Customers\PhoneNumberType as PhoneNumberType;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Customer::class, function (Faker\Generator $faker) {

    return [
        'first_name' => $faker->firstName,
        'middle_initial' => str_random(1),
        'last_name' => $faker->lastName,
        'birthday' => $faker->date('Y-m-d'),
        'gender' => rand(0,1)?('M'):('F')
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(EmailAddress::class, function (Faker\Generator $faker) {
    return [
        'email_address' => $faker->email,
        'is_active' => '1',
        'is_primary' => '1',
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(PhoneNumber::class, function (Faker\Generator $faker) {
    return [
        'phone_number' => $faker->phoneNumber,
        'is_active' => '1',
        'is_primary' => '1',
    ];
});
