<?php

namespace App\Http\Controllers\Admin;

use App\CoSo;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPhongHocRequest;
use App\Http\Requests\StorePhongHocRequest;
use App\Http\Requests\UpdatePhongHocRequest;
use App\PhongHoc;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PhongHocController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('phong_hoc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $phongHocs = PhongHoc::all();

        return view('admin.phongHocs.index', compact('phongHocs'));
    }

    public function create()
    {
        abort_if(Gate::denies('phong_hoc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $co_sos = CoSo::all()->pluck('ten_cs', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.phongHocs.create', compact('co_sos'));
    }

    public function store(StorePhongHocRequest $request)
    {
        $phongHoc = PhongHoc::create($request->all());

        return redirect()->route('admin.phong-hocs.index');
    }

    public function edit(PhongHoc $phongHoc)
    {
        abort_if(Gate::denies('phong_hoc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $co_sos = CoSo::all()->pluck('ten_cs', 'id')->prepend(trans('global.pleaseSelect'), '');

        $phongHoc->load('co_so');

        return view('admin.phongHocs.edit', compact('co_sos', 'phongHoc'));
    }

    public function update(UpdatePhongHocRequest $request, PhongHoc $phongHoc)
    {
        $phongHoc->update($request->all());

        return redirect()->route('admin.phong-hocs.index');
    }

    public function show(PhongHoc $phongHoc)
    {
        abort_if(Gate::denies('phong_hoc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $phongHoc->load('co_so');

        return view('admin.phongHocs.show', compact('phongHoc'));
    }

    public function destroy(PhongHoc $phongHoc)
    {
        abort_if(Gate::denies('phong_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $phongHoc->delete();

        return back();
    }

    public function massDestroy(MassDestroyPhongHocRequest $request)
    {
        PhongHoc::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
