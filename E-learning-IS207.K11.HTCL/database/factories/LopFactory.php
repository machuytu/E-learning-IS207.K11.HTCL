<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Lop;
use Illuminate\Support\Str;
$factory->define(Lop::class, function (Faker $faker) {
    return [
        'id' => $faker->name,
        'gia'=> $faker->randomNumber,
        'ten_link' => $faker->slug,
        'mo_ta' => $faker->paragraph,
        'mo_hoc_id' => App\MonHoc::all()->random()->id,
        'published' => 1,
        'ten_lop_hoc' => $faker->name,
        'the_loai_id' => App\TheLoai::all()->random()->id,
        'giao_vien_id' => App\User::all()->random(),
        'phong_hoc_id' => App\PhongHoc::all()->random()->id,
    ];
});
