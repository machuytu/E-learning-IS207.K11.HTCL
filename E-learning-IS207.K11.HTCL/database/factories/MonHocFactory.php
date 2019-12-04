<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MonHoc;
use Faker\Generator as Faker;

$factory->define(MonHoc::class, function (Faker $faker) {
    return [
        'id' => $faker->name,
        'ten_mh' => $faker->title,
        'mo_ta_mh' => $faker->title,
    ];
});
