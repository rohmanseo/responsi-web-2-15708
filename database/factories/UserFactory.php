<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Jobs;
use App\Employees;
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
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

//  factory jobs
//  kolom 'name' => faker->jobTitle

//  factory employees
//  kolom 'id_jobs' => faker->numberBetween() numberBetween adalah id_jobs minimal dan id_jobs maksimal yang ada pada tabel jobs
//  kolom 'name' => faker->name
//  kolom 'email' => faker->email UNIQUE
//  kolom 'phone' => faker->phoneNumber
//  kolom 'address' => faker->address

// documentation https://github.com/fzaninotto/Faker