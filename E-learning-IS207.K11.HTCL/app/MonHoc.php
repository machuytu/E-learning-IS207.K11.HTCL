<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonHoc extends Model
{
    use SoftDeletes;

    public $table = 'mon_hocs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ma_mh',
        'ten_mh',
        'mo_ta_mh',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function lops()
    {
        return $this->hasMany(Lop::class, 'mo_hoc_id', 'id');
    }
}
