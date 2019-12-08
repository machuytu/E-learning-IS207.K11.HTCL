<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BaiHoc;
use Faker\Generator as Faker;

$factory->define(BaiHoc::class, function (Faker $faker) {
    return [
        'lop_id' => App\Lop::all()->random()->id,
        'loi_ngan' => $faker->text,
        'noi_dung' => $faker->paragraph,
        'lien_quan'=> $faker->slug,
        'ten_bai_hoc' => $faker->name,
        'vi_tri_bai_hoc' => rand(1, 10),
    ];
});
