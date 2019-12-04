<?php

use App\CoSo;
use Illuminate\Database\Seeder;

class CoSoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CoSo::class, 10)->create();
    }
}
