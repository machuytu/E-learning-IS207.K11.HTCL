<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheLoai extends Model
{
    use SoftDeletes;

    public $table = 'the_loais';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ten_tl',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function lops()
    {
        return $this->hasMany(Lop::class, 'the_loai_id', 'id');
    }
}
