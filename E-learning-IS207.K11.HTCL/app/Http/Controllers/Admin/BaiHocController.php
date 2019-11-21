<?php

namespace App\Http\Controllers\Admin;

use App\BaiHoc;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBaiHocRequest;
use App\Http\Requests\StoreBaiHocRequest;
use App\Http\Requests\UpdateBaiHocRequest;
use App\Lop;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BaiHocController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('bai_hoc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $baiHocs = BaiHoc::all();

        return view('admin.baiHocs.index', compact('baiHocs'));
    }

    public function create()
    {
        abort_if(Gate::denies('bai_hoc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lops = Lop::all()->pluck('ten_lop_hoc', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.baiHocs.create', compact('lops'));
    }

    public function store(StoreBaiHocRequest $request)
    {
        $baiHoc = BaiHoc::create($request->all());

        foreach ($request->input('hinh_anh_bai_hoc', []) as $file) {
            $baiHoc->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('hinh_anh_bai_hoc');
        }

        foreach ($request->input('file', []) as $file) {
            $baiHoc->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('file');
        }

        return redirect()->route('admin.bai-hocs.index');
    }

    public function edit(BaiHoc $baiHoc)
    {
        abort_if(Gate::denies('bai_hoc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lops = Lop::all()->pluck('ten_lop_hoc', 'id')->prepend(trans('global.pleaseSelect'), '');

        $baiHoc->load('lop');

        return view('admin.baiHocs.edit', compact('lops', 'baiHoc'));
    }

    public function update(UpdateBaiHocRequest $request, BaiHoc $baiHoc)
    {
        $baiHoc->update($request->all());

        if (count($baiHoc->hinh_anh_bai_hoc) > 0) {
            foreach ($baiHoc->hinh_anh_bai_hoc as $media) {
                if (!in_array($media->file_name, $request->input('hinh_anh_bai_hoc', []))) {
                    $media->delete();
                }
            }
        }

        $media = $baiHoc->hinh_anh_bai_hoc->pluck('file_name')->toArray();

        foreach ($request->input('hinh_anh_bai_hoc', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $baiHoc->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('hinh_anh_bai_hoc');
            }
        }

        if (count($baiHoc->file) > 0) {
            foreach ($baiHoc->file as $media) {
                if (!in_array($media->file_name, $request->input('file', []))) {
                    $media->delete();
                }
            }
        }

        $media = $baiHoc->file->pluck('file_name')->toArray();

        foreach ($request->input('file', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $baiHoc->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('file');
            }
        }

        return redirect()->route('admin.bai-hocs.index');
    }

    public function show(BaiHoc $baiHoc)
    {
        abort_if(Gate::denies('bai_hoc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $baiHoc->load('lop');

        return view('admin.baiHocs.show', compact('baiHoc'));
    }

    public function destroy(BaiHoc $baiHoc)
    {
        abort_if(Gate::denies('bai_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $baiHoc->delete();

        return back();
    }

    public function massDestroy(MassDestroyBaiHocRequest $request)
    {
        BaiHoc::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
