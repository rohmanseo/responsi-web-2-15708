<?php
/**
 * Created by PhpStorm.
 * User: Rohman
 * Date: 17/12/2019
 * Time: 12:43
 */

use App\Jobs;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Jobs::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});