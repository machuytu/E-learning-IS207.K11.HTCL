<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TheLoai;
use Faker\Generator as Faker;

$factory->define(TheLoai::class, function (Faker $faker) {
    return [
        'ten_tl' => $faker->name,
        'loai_tl' => $faker->name,
    ];
});
