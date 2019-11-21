<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTheLoaiRequest;
use App\Http\Requests\StoreTheLoaiRequest;
use App\Http\Requests\UpdateTheLoaiRequest;
use App\TheLoai;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TheLoaiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('the_loai_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $theLoais = TheLoai::all();

        return view('admin.theLoais.index', compact('theLoais'));
    }

    public function create()
    {
        abort_if(Gate::denies('the_loai_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.theLoais.create');
    }

    public function store(StoreTheLoaiRequest $request)
    {
        $theLoai = TheLoai::create($request->all());

        return redirect()->route('admin.the-loais.index');
    }

    public function edit(TheLoai $theLoai)
    {
        abort_if(Gate::denies('the_loai_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.theLoais.edit', compact('theLoai'));
    }

    public function update(UpdateTheLoaiRequest $request, TheLoai $theLoai)
    {
        $theLoai->update($request->all());

        return redirect()->route('admin.the-loais.index');
    }

    public function show(TheLoai $theLoai)
    {
        abort_if(Gate::denies('the_loai_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.theLoais.show', compact('theLoai'));
    }

    public function destroy(TheLoai $theLoai)
    {
        abort_if(Gate::denies('the_loai_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $theLoai->delete();

        return back();
    }

    public function massDestroy(MassDestroyTheLoaiRequest $request)
    {
        TheLoai::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
