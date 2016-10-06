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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $data = [
        'nome' => $faker->name,
        'email' => $faker->safeEmail,
        'username' => $faker->userName,
        'senha' => $password ?: $password = bcrypt('secret'),
        // 'api_token' => str_random(60),
        'remember_token' => str_random(10),
    ];

    return $data;

    // dd($data);
});
