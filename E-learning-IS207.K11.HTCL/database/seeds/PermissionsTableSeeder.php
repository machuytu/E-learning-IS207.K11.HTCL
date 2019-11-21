<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'mon_hoc_create',
            ],
            [
                'id'    => '18',
                'title' => 'mon_hoc_edit',
            ],
            [
                'id'    => '19',
                'title' => 'mon_hoc_show',
            ],
            [
                'id'    => '20',
                'title' => 'mon_hoc_delete',
            ],
            [
                'id'    => '21',
                'title' => 'mon_hoc_access',
            ],
            [
                'id'    => '22',
                'title' => 'the_loai_create',
            ],
            [
                'id'    => '23',
                'title' => 'the_loai_edit',
            ],
            [
                'id'    => '24',
                'title' => 'the_loai_show',
            ],
            [
                'id'    => '25',
                'title' => 'the_loai_delete',
            ],
            [
                'id'    => '26',
                'title' => 'the_loai_access',
            ],
            [
                'id'    => '27',
                'title' => 'co_so_create',
            ],
            [
                'id'    => '28',
                'title' => 'co_so_edit',
            ],
            [
                'id'    => '29',
                'title' => 'co_so_show',
            ],
            [
                'id'    => '30',
                'title' => 'co_so_delete',
            ],
            [
                'id'    => '31',
                'title' => 'co_so_access',
            ],
            [
                'id'    => '32',
                'title' => 'phong_hoc_create',
            ],
            [
                'id'    => '33',
                'title' => 'phong_hoc_edit',
            ],
            [
                'id'    => '34',
                'title' => 'phong_hoc_show',
            ],
            [
                'id'    => '35',
                'title' => 'phong_hoc_delete',
            ],
            [
                'id'    => '36',
                'title' => 'phong_hoc_access',
            ],
            [
                'id'    => '37',
                'title' => 'lop_create',
            ],
            [
                'id'    => '38',
                'title' => 'lop_edit',
            ],
            [
                'id'    => '39',
                'title' => 'lop_show',
            ],
            [
                'id'    => '40',
                'title' => 'lop_delete',
            ],
            [
                'id'    => '41',
                'title' => 'lop_access',
            ],
            [
                'id'    => '42',
                'title' => 'bai_hoc_create',
            ],
            [
                'id'    => '43',
                'title' => 'bai_hoc_edit',
            ],
            [
                'id'    => '44',
                'title' => 'bai_hoc_show',
            ],
            [
                'id'    => '45',
                'title' => 'bai_hoc_delete',
            ],
            [
                'id'    => '46',
                'title' => 'bai_hoc_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
