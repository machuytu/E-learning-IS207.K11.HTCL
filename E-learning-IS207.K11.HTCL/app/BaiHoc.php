<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class BaiHoc extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'bai_hocs';

    protected $appends = [
        'file',
        'hinh_anh_bai_hoc',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'lop_id',
        'loi_ngan',
        'noi_dung',
        'lien_quan',
        'created_at',
        'updated_at',
        'deleted_at',
        'ten_bai_hoc',
        'vi_tri_bai_hoc',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function lop()
    {
        return $this->belongsTo(Lop::class, 'lop_id');
    }

    public function getHinhAnhBaiHocAttribute()
    {
        $files = $this->getMedia('hinh_anh_bai_hoc');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }

    public function getFileAttribute()
    {
        return $this->getMedia('file');
    }
}
