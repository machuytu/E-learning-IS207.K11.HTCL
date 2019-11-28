<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Lop;

$factory->define(App\Lop::class, function (Faker $faker) {
    return [
        'ten_lop_hoc' => $faker->name,
        // 'thgian_bd' => $faker->date(),
        // 'thgian_kt' => $faker->date(),
        'gia' => $faker->randomFloat(),
        'published' => 1,
    ];
});
