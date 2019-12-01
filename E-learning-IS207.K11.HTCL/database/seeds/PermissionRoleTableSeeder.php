<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [

            1 => [
                'permissions' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45],
            ],
            2 => [
                'permissions' => [1, 21, 22, 23, 24, 26, 27, 28, 29, 31, 32, 33, 34, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45],
            ],
            3 => [
                'permissions' => [1, 21, 24, 26, 29, 31, 34, 36, 37, 38, 39, 40, 41, 44],
            ],

        ];

        foreach ($permissions as $id => $permissions) {
            $role = Role::find($id);

            foreach ($permissions as $key => $ids) {
                $role->{$key}()->sync($ids);
            }
        }

    }
}
