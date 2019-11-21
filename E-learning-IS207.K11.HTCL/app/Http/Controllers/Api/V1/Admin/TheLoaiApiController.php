<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTheLoaiRequest;
use App\Http\Requests\UpdateTheLoaiRequest;
use App\Http\Resources\Admin\TheLoaiResource;
use App\TheLoai;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TheLoaiApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('the_loai_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TheLoaiResource(TheLoai::all());
    }

    public function store(StoreTheLoaiRequest $request)
    {
        $theLoai = TheLoai::create($request->all());

        return (new TheLoaiResource($theLoai))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TheLoai $theLoai)
    {
        abort_if(Gate::denies('the_loai_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TheLoaiResource($theLoai);
    }

    public function update(UpdateTheLoaiRequest $request, TheLoai $theLoai)
    {
        $theLoai->update($request->all());

        return (new TheLoaiResource($theLoai))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TheLoai $theLoai)
    {
        abort_if(Gate::denies('the_loai_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $theLoai->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
