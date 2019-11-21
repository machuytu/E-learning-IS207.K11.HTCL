<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\BaiHoc;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreBaiHocRequest;
use App\Http\Requests\UpdateBaiHocRequest;
use App\Http\Resources\Admin\BaiHocResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BaiHocApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('bai_hoc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BaiHocResource(BaiHoc::with(['lop'])->get());
    }

    public function store(StoreBaiHocRequest $request)
    {
        $baiHoc = BaiHoc::create($request->all());

        if ($request->input('hinh_anh_bai_hoc', false)) {
            $baiHoc->addMedia(storage_path('tmp/uploads/' . $request->input('hinh_anh_bai_hoc')))->toMediaCollection('hinh_anh_bai_hoc');
        }

        if ($request->input('file', false)) {
            $baiHoc->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
        }

        return (new BaiHocResource($baiHoc))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(BaiHoc $baiHoc)
    {
        abort_if(Gate::denies('bai_hoc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BaiHocResource($baiHoc->load(['lop']));
    }

    public function update(UpdateBaiHocRequest $request, BaiHoc $baiHoc)
    {
        $baiHoc->update($request->all());

        if ($request->input('hinh_anh_bai_hoc', false)) {
            if (!$baiHoc->hinh_anh_bai_hoc || $request->input('hinh_anh_bai_hoc') !== $baiHoc->hinh_anh_bai_hoc->file_name) {
                $baiHoc->addMedia(storage_path('tmp/uploads/' . $request->input('hinh_anh_bai_hoc')))->toMediaCollection('hinh_anh_bai_hoc');
            }
        } elseif ($baiHoc->hinh_anh_bai_hoc) {
            $baiHoc->hinh_anh_bai_hoc->delete();
        }

        if ($request->input('file', false)) {
            if (!$baiHoc->file || $request->input('file') !== $baiHoc->file->file_name) {
                $baiHoc->addMedia(storage_path('tmp/uploads/' . $request->input('file')))->toMediaCollection('file');
            }
        } elseif ($baiHoc->file) {
            $baiHoc->file->delete();
        }

        return (new BaiHocResource($baiHoc))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(BaiHoc $baiHoc)
    {
        abort_if(Gate::denies('bai_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $baiHoc->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
