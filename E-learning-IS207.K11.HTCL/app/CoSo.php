<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoSo extends Model
{
    use SoftDeletes;

    public $table = 'co_sos';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ten_cs',
        'dia_chi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function phongHocs()
    {
        return $this->hasMany(PhongHoc::class, 'co_so_id', 'id');
    }
}
