<?php

return [
    'userManagement' => [
        'title'          => 'Quản lý người dùng',
        'title_singular' => 'Quản lý người dùng',
    ],
    'permission'     => [
        'title'          => 'Quyền',
        'title_singular' => 'Quyền',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Loại',
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
        'title'          => 'Loại',
        'title_singular' => 'Loại',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Loại',
            'title_helper'       => '',
            'permissions'        => 'Quyền',
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
        'title'          => 'Người dùng',
        'title_singular' => 'Người dùng',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Tên',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'sex'                      => 'Giới tính',
            'sex_helper'               => '',
            'address'                  => 'Địa chỉ',
            'address_helper'           => '',
            'phone_number'             => 'Số điện thoại',
            'phone_number_helper'      => '',
            'email_verified_at'        => 'Email xác thực Email',
            'email_verified_at_helper' => '',
            'avatar'                   => 'Ảnh đại diện',
            'avatar_helper'            => '',
            'store'                    => 'Tích Lũy',
            'store_helper'             => '',
            'password'                 => 'Mật Khẩu',
            'password_helper'          => '',
            'roles'                    => 'Loại',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'approved'                 => 'Cho Phép',
            'approved_helper'          => '',
        ],
    ],
    'monHoc'         => [
        'title'          => 'Môn Học',
        'title_singular' => 'Môn Học',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'ten_mh'            => 'Tên Môn Học',
            'ten_mh_helper'     => '',
            'mo_ta_mh'          => 'Mô Tả Môn Học',
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
        'title'          => 'Thể Loại',
        'title_singular' => 'Thể Loại',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'ten_tl'            => 'Tên Thể loại',
            'ten_tl_helper'     => '',
            'loai_tl'            => 'Loại Thể Loại',
            'loai_tl_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'coSo'           => [
        'title'          => 'Cơ Sở',
        'title_singular' => 'Cơ Sở',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'ten_cs'            => 'Tên Cơ Sở',
            'ten_cs_helper'     => '',
            'dia_chi'           => 'Địa Chỉ',
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
        'title'          => 'Phòng Học',
        'title_singular' => 'Phòng Học',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'co_so'             => 'Cơ Sở',
            'co_so_helper'      => '',
            'ten_phong'         => 'Tên Phòng',
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
        'title'          => 'Lớp',
        'title_singular' => 'Lớp',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ten_lop_hoc'         => 'Tên Lớp Học',
            'ten_lop_hoc_helper'  => '',
            'thgian_bd'           => 'Thời Gian Bắt Đầu',
            'thgian_bd_helper'    => '',
            'thgian_kt'           => 'Thời Gian Kết Thúc',
            'thgian_kt_helper'    => '',
            'ca_hoc'              => 'Ca Học',
            'ca_hoc_helper'       => '',
            'thu_hoc'             => 'Thứ Học',
            'thu_hoc_helper'      => '',
            'ten_link'            => 'Tên Link',
            'ten_link_helper'     => '',
            'mo_ta'               => 'Mô Tả',
            'mo_ta_helper'        => '',
            'mo_hoc'              => 'Môn Học',
            'mo_hoc_helper'       => '',
            'the_loai'            => 'Thể Loại',
            'the_loai_helper'     => '',
            'phong_hoc'           => 'Phòng Học',
            'phong_hoc_helper'    => '',
            'hoc_vien'            => 'Học Viên',
            'hoc_vien_helper'     => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
            'giao_vien'           => 'Giáo Viên',
            'giao_vien_helper'    => '',
            'gia'                 => 'Giá',
            'gia_helper'          => '',
            'hinh_anh_lop'        => 'Hình Ảnh Lớp',
            'hinh_anh_lop_helper' => '',
            'published'           => 'Published',
            'published_helper'    => '',
        ],
    ],
    'baiHoc'         => [
        'title'          => 'Bài Học',
        'title_singular' => 'Bài Học',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'lop'                     => 'Lớp',
            'lop_helper'              => '',
            'ten_bai_hoc'             => 'Tên Bài Học',
            'ten_bai_hoc_helper'      => '',
            'lien_quan'               => 'Liên Quan',
            'lien_quan_helper'        => '',
            'loi_ngan'                => 'Lời Ngắn',
            'loi_ngan_helper'         => '',
            'noi_dung'                => 'Nội Dung',
            'noi_dung_helper'         => '',
            'vi_tri_bai_hoc'          => 'Vi Trí Bài Học',
            'vi_tri_bai_hoc_helper'   => '',
            'hinh_anh_bai_hoc'        => 'Hình Ảnh Bài Học',
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
    'thongBao'       => [
        'title'          => 'Thong Bao',
        'title_singular' => 'Thong Bao',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'ten_tb'            => 'Ten Tb',
            'ten_tb_helper'     => '',
            'noi_dung'          => 'Nội Dung',
            'noi_dung_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
