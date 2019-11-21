<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhongHocRequest;
use App\Http\Requests\UpdatePhongHocRequest;
use App\Http\Resources\Admin\PhongHocResource;
use App\PhongHoc;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PhongHocApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('phong_hoc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PhongHocResource(PhongHoc::with(['co_so'])->get());
    }

    public function store(StorePhongHocRequest $request)
    {
        $phongHoc = PhongHoc::create($request->all());

        return (new PhongHocResource($phongHoc))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PhongHoc $phongHoc)
    {
        abort_if(Gate::denies('phong_hoc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PhongHocResource($phongHoc->load(['co_so']));
    }

    public function update(UpdatePhongHocRequest $request, PhongHoc $phongHoc)
    {
        $phongHoc->update($request->all());

        return (new PhongHocResource($phongHoc))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PhongHoc $phongHoc)
    {
        abort_if(Gate::denies('phong_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $phongHoc->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
