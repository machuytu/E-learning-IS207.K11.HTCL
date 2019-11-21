<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhongHoc extends Model
{
    use SoftDeletes;

    public $table = 'phong_hocs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'co_so_id',
        'ten_phong',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function lops()
    {
        return $this->hasMany(Lop::class, 'phong_hoc_id', 'id');
    }

    public function co_so()
    {
        return $this->belongsTo(CoSo::class, 'co_so_id');
    }
}
