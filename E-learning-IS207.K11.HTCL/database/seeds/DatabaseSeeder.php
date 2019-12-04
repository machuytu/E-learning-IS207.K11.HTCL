<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,

            //du lieu gia
            CoSoTableSeeder::class,
            MonHocTableSeeder::class,
            PhongHocTableSeeder::class,
            TheLoaiTableSeeder::class,
            LopTableSeeder::class,
            BaiHocTableSeeder::class,
        ]);
    }
}
