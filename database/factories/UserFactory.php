<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Pelanggan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
    return [
        'name' => $faker->name,
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Pelanggan::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telepon' => $faker->randomNumber(9),
        'provinsi' => $faker->text,
        // 'telepon' => $faker->text,
        'kota' => $faker->text,
        // 'kodepos' => $faker->text,
        'kodepos' => $faker->unique()->numberBetween(10000, 99999)
    ];
});
