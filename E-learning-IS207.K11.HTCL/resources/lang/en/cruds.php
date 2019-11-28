<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'approved'                 => 'Approved',
            'approved_helper'          => '',
        ],
    ],
    'monHoc'         => [
        'title'          => 'Mon Hoc',
        'title_singular' => 'Mon Hoc',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'ten_mh'            => 'Ten Mh',
            'ten_mh_helper'     => '',
            'mo_ta_mh'          => 'Mo Ta Mh',
            'mo_ta_mh_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'theLoai'        => [
        'title'          => 'The Loai',
        'title_singular' => 'The Loai',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'ten_tl'            => 'Ten Tl',
            'ten_tl_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'coSo'           => [
        'title'          => 'Co So',
        'title_singular' => 'Co So',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'ten_cs'            => 'Ten Cs',
            'ten_cs_helper'     => '',
            'dia_chi'           => 'Dia Chi',
            'dia_chi_helper'    => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'phongHoc'       => [
        'title'          => 'Phong Hoc',
        'title_singular' => 'Phong Hoc',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'co_so'             => 'Co So',
            'co_so_helper'      => '',
            'ten_phong'         => 'Ten Phong',
            'ten_phong_helper'  => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'lop'            => [
        'title'          => 'Lop',
        'title_singular' => 'Lop',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ten_lop_hoc'         => 'Ten Lop Hoc',
            'ten_lop_hoc_helper'  => '',
            'thgian_bd'           => 'Thgian Bd',
            'thgian_bd_helper'    => '',
            'thgian_kt'           => 'Thgian Kt',
            'thgian_kt_helper'    => '',
            'mo_hoc'              => 'Mo Hoc',
            'mo_hoc_helper'       => '',
            'the_loai'            => 'The Loai',
            'the_loai_helper'     => '',
            'phong_hoc'           => 'Phong Hoc',
            'phong_hoc_helper'    => '',
            'hoc_vien'            => 'Hoc Vien',
            'hoc_vien_helper'     => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
            'giao_vien'           => 'Giao Vien',
            'giao_vien_helper'    => '',
            'gia'                 => 'Gia',
            'gia_helper'          => '',
            'hinh_anh_lop'        => 'Hinh Anh Lop',
            'hinh_anh_lop_helper' => '',
            'published'           => 'Published',
            'published_helper'    => '',
        ],
    ],
    'baiHoc'         => [
        'title'          => 'Bai Hoc',
        'title_singular' => 'Bai Hoc',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'lop'                     => 'Lop',
            'lop_helper'              => '',
            'ten_bai_hoc'             => 'Ten Bai Hoc',
            'ten_bai_hoc_helper'      => '',
            'lien_quan'               => 'Lien Quan',
            'lien_quan_helper'        => '',
            'loi_ngan'                => 'Loi Ngan',
            'loi_ngan_helper'         => '',
            'noi_dung'                => 'Noi Dung',
            'noi_dung_helper'         => '',
            'vi_tri_bai_hoc'          => 'Vi Tri Bai Hoc',
            'vi_tri_bai_hoc_helper'   => '',
            'hinh_anh_bai_hoc'        => 'Hinh Anh Bai Hoc',
            'hinh_anh_bai_hoc_helper' => '',
            'file'                    => 'File',
            'file_helper'             => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
        ],
    ],
];