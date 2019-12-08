<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CoSo;
use Faker\Generator as Faker;

$factory->define(CoSo::class, function (Faker $faker) {
    return [
        'ten_cs' => $faker->company,
        'dia_chi' => $faker->address,
    ];
});
