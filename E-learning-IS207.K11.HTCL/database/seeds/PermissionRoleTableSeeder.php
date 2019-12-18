<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        $permissions = [
            // 2 => [
            //     'permissions' => [1, 21, 22, 23, 24, 26, 27, 28, 29, 31, 32, 33, 34, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45],
            // ],
            2 => [
                'permissions' => [19, 21, 24, 26, 29, 31, 34, 36, 39, 41, 42, 43, 44, 45, 46],
            ],
            3 => [
                'permissions' => [19, 21, 24, 26, 29, 31, 34, 36, 39, 41, 44, 46],
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
