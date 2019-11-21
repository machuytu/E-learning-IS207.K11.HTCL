<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CoSo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoSoRequest;
use App\Http\Requests\UpdateCoSoRequest;
use App\Http\Resources\Admin\CoSoResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoSoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('co_so_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CoSoResource(CoSo::all());
    }

    public function store(StoreCoSoRequest $request)
    {
        $coSo = CoSo::create($request->all());

        return (new CoSoResource($coSo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CoSo $coSo)
    {
        abort_if(Gate::denies('co_so_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CoSoResource($coSo);
    }

    public function update(UpdateCoSoRequest $request, CoSo $coSo)
    {
        $coSo->update($request->all());

        return (new CoSoResource($coSo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CoSo $coSo)
    {
        abort_if(Gate::denies('co_so_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coSo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
