<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Lop extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'lops';

    protected $appends = [
        'hinh_anh_lop',
    ];

    protected $dates = [
        'thgian_bd',
        'thgian_kt',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'gia',
        'thgian_bd',
        'thgian_kt',
        'mo_hoc_id',
        'published',
        'created_at',
        'updated_at',
        'deleted_at',
        'ten_lop_hoc',
        'the_loai_id',
        'giao_vien_id',
        'phong_hoc_id',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function getThgianBdAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setThgianBdAttribute($value)
    {
        $this->attributes['thgian_bd'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getThgianKtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setThgianKtAttribute($value)
    {
        $this->attributes['thgian_kt'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function mo_hoc()
    {
        return $this->belongsTo(MonHoc::class, 'mo_hoc_id');
    }

    public function the_loai()
    {
        return $this->belongsTo(TheLoai::class, 'the_loai_id');
    }

    public function giao_vien()
    {
        return $this->belongsTo(User::class, 'giao_vien_id');
    }

    public function phong_hoc()
    {
        return $this->belongsTo(PhongHoc::class, 'phong_hoc_id');
    }

    public function baiHocs()
    {
        return $this->hasMany(BaiHoc::class, 'lop_id', 'id');
    }


    public function hoc_viens()
    {
        return $this->belongsToMany(User::class);
    }

    public function getHinhAnhLopAttribute()
    {
        $file = $this->getMedia('hinh_anh_lop')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
}
