<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyThongBaoRequest;
use App\Http\Requests\StoreThongBaoRequest;
use App\Http\Requests\UpdateThongBaoRequest;
use App\ThongBao;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThongBaoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('thong_bao_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $thongBaos = ThongBao::all();

        return view('admin.thongBaos.index', compact('thongBaos'));
    }

    public function create()
    {
        abort_if(Gate::denies('thong_bao_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thongBaos.create');
    }

    public function store(StoreThongBaoRequest $request)
    {
        $thongBao = ThongBao::create($request->all());

        return redirect()->route('admin.thong-baos.index');
    }

    public function edit(ThongBao $thongBao)
    {
        abort_if(Gate::denies('thong_bao_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thongBaos.edit', compact('thongBao'));
    }

    public function update(UpdateThongBaoRequest $request, ThongBao $thongBao)
    {
        $thongBao->update($request->all());

        return redirect()->route('admin.thong-baos.index');
    }

    public function show(ThongBao $thongBao)
    {
        abort_if(Gate::denies('thong_bao_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thongBaos.show', compact('thongBao'));
    }

    public function destroy(ThongBao $thongBao)
    {
        abort_if(Gate::denies('thong_bao_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $thongBao->delete();

        return back();
    }

    public function massDestroy(MassDestroyThongBaoRequest $request)
    {
        ThongBao::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
