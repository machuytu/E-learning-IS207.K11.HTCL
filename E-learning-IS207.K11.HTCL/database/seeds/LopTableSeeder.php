<?php

use App\Lop;
use Illuminate\Database\Seeder;

class LopTableSeeder extends Seeder
{
    public function run()
    {
        factory(Lop::class, 10)->create();
    }
}
