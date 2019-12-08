<?php

use App\TheLoai;
use Illuminate\Database\Seeder;

class TheLoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TheLoai::class, 10)->create();
    }
}
