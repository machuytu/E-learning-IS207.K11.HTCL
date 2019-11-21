<?php

namespace App\Http\Controllers\Admin;

use App\CoSo;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCoSoRequest;
use App\Http\Requests\StoreCoSoRequest;
use App\Http\Requests\UpdateCoSoRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoSoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('co_so_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coSos = CoSo::all();

        return view('admin.coSos.index', compact('coSos'));
    }

    public function create()
    {
        abort_if(Gate::denies('co_so_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coSos.create');
    }

    public function store(StoreCoSoRequest $request)
    {
        $coSo = CoSo::create($request->all());

        return redirect()->route('admin.co-sos.index');
    }

    public function edit(CoSo $coSo)
    {
        abort_if(Gate::denies('co_so_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coSos.edit', compact('coSo'));
    }

    public function update(UpdateCoSoRequest $request, CoSo $coSo)
    {
        $coSo->update($request->all());

        return redirect()->route('admin.co-sos.index');
    }

    public function show(CoSo $coSo)
    {
        abort_if(Gate::denies('co_so_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coSos.show', compact('coSo'));
    }

    public function destroy(CoSo $coSo)
    {
        abort_if(Gate::denies('co_so_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coSo->delete();

        return back();
    }

    public function massDestroy(MassDestroyCoSoRequest $request)
    {
        CoSo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
