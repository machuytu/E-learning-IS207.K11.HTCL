<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreLopRequest;
use App\Http\Requests\UpdateLopRequest;
use App\Http\Resources\Admin\LopResource;
use App\Lop;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LopApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('lop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LopResource(Lop::with(['mo_hoc', 'the_loai', 'giao_vien', 'phong_hoc', 'hoc_viens'])->get());
    }

    public function store(StoreLopRequest $request)
    {
        $lop = Lop::create($request->all());
        $lop->hoc_viens()->sync($request->input('hoc_viens', []));

        if ($request->input('hinh_anh_lop', false)) {
            $lop->addMedia(storage_path('tmp/uploads/' . $request->input('hinh_anh_lop')))->toMediaCollection('hinh_anh_lop');
        }

        return (new LopResource($lop))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Lop $lop)
    {
        abort_if(Gate::denies('lop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LopResource($lop->load(['mo_hoc', 'the_loai', 'giao_vien', 'phong_hoc', 'hoc_viens']));
    }

    public function update(UpdateLopRequest $request, Lop $lop)
    {
        $lop->update($request->all());
        $lop->hoc_viens()->sync($request->input('hoc_viens', []));

        if ($request->input('hinh_anh_lop', false)) {
            if (!$lop->hinh_anh_lop || $request->input('hinh_anh_lop') !== $lop->hinh_anh_lop->file_name) {
                $lop->addMedia(storage_path('tmp/uploads/' . $request->input('hinh_anh_lop')))->toMediaCollection('hinh_anh_lop');
            }
        } elseif ($lop->hinh_anh_lop) {
            $lop->hinh_anh_lop->delete();
        }

        return (new LopResource($lop))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Lop $lop)
    {
        abort_if(Gate::denies('lop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lop->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
