<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Lop;

$factory->define(Lop::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'id' => $name,
        'ten_lop_hoc' => $name,
        'mo_hoc_id' => '3123',
        'gia' => $faker->randomFloat(),
        'published' => 1,
    ];
});
