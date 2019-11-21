<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMonHocRequest;
use App\Http\Requests\UpdateMonHocRequest;
use App\Http\Resources\Admin\MonHocResource;
use App\MonHoc;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MonHocApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mon_hoc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MonHocResource(MonHoc::all());
    }

    public function store(StoreMonHocRequest $request)
    {
        $monHoc = MonHoc::create($request->all());

        return (new MonHocResource($monHoc))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MonHoc $monHoc)
    {
        abort_if(Gate::denies('mon_hoc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MonHocResource($monHoc);
    }

    public function update(UpdateMonHocRequest $request, MonHoc $monHoc)
    {
        $monHoc->update($request->all());

        return (new MonHocResource($monHoc))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MonHoc $monHoc)
    {
        abort_if(Gate::denies('mon_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $monHoc->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
