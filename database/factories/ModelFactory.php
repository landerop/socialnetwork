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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username'       => $faker->userName,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt('password'),
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'country'        => $faker->randomElement(App\Utilities\Country::codes()),
        'city'           => $faker->city,
        'biography'      => $faker->sentence(),
        'remember_token' => str_random(10),
    ];
});
