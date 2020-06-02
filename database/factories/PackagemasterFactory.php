<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Packagemaster::class, function (Faker $faker) {
    return [
        'package_name' => $faker->name(),
        'citymaster_id' => App\Citymaster::pluck('id')->random(),
        'user_id' => App\User::pluck('id')->random(),
    ];
});
