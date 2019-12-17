<?php
/**
 * Created by PhpStorm.
 * User: Rohman
 * Date: 17/12/2019
 * Time: 12:43
 */

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Employees;


$factory->define(Employees::class, function (Faker $faker) {
    return [
        'id_jobs' => $faker->numberBetween(1,10) ,
        'name' => $faker->name,
        'email' => $faker->freeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address
    ];
});