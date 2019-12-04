<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PhongHoc;
use Faker\Generator as Faker;

$factory->define(PhongHoc::class, function (Faker $faker) {
    return [
        'ten_phong' => $faker->company,
        'co_so_id' => App\CoSo::all()->random()->id,
    ];
});
