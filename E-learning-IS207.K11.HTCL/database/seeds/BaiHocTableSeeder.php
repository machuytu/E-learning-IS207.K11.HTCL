<?php

use App\BaiHoc;
use Illuminate\Database\Seeder;

class BaiHocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BaiHoc::class, 10)->create();
    }
}
