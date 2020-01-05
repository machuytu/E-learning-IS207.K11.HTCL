<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThongBao extends Model
{
    use SoftDeletes;

    public $table = 'thong_baos';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ten_tb',
        'noi_dung',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
