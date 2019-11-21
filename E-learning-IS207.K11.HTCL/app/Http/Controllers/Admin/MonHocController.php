<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMonHocRequest;
use App\Http\Requests\StoreMonHocRequest;
use App\Http\Requests\UpdateMonHocRequest;
use App\MonHoc;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MonHocController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mon_hoc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $monHocs = MonHoc::all();

        return view('admin.monHocs.index', compact('monHocs'));
    }

    public function create()
    {
        abort_if(Gate::denies('mon_hoc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.monHocs.create');
    }

    public function store(StoreMonHocRequest $request)
    {
        $monHoc = MonHoc::create($request->all());

        return redirect()->route('admin.mon-hocs.index');
    }

    public function edit(MonHoc $monHoc)
    {
        abort_if(Gate::denies('mon_hoc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.monHocs.edit', compact('monHoc'));
    }

    public function update(UpdateMonHocRequest $request, MonHoc $monHoc)
    {
        $monHoc->update($request->all());

        return redirect()->route('admin.mon-hocs.index');
    }

    public function show(MonHoc $monHoc)
    {
        abort_if(Gate::denies('mon_hoc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.monHocs.show', compact('monHoc'));
    }

    public function destroy(MonHoc $monHoc)
    {
        abort_if(Gate::denies('mon_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $monHoc->delete();

        return back();
    }

    public function massDestroy(MassDestroyMonHocRequest $request)
    {
        MonHoc::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
