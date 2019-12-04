<?php

use Illuminate\Database\Seeder;
use App\MonHoc;

class MonHocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MonHoc::class, 10)->create();
    }
}
