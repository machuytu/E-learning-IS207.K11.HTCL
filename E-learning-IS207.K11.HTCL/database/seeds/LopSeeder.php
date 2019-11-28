<?php

use App\Permission;
use Illuminate\Database\Seeder;

class LopSeeder extends Seeder
{
    public function run()
    {
        factory(App\Lop::class, 5)->create();
    }
}
