<?php

use App\PhongHoc;
use Illuminate\Database\Seeder;

class PhongHocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PhongHoc::class, 10)->create();
    }
}
