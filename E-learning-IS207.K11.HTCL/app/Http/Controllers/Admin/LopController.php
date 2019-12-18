<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLopRequest;
use App\Http\Requests\StoreLopRequest;
use App\Http\Requests\UpdateLopRequest;
use Illuminate\Support\Str;


use App\Lop;
use App\MonHoc;
use App\PhongHoc;
use App\TheLoai;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LopController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('lop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lops = Lop::ofGiaoVien()->get();

        return view('admin.lops.index', compact('lops'));
    }

    public function create()
    {
        abort_if(Gate::denies('lop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mo_hocs = MonHoc::all()->pluck('ten_mh', 'id')->prepend(trans('global.pleaseSelect'), '');

        $the_loais = TheLoai::all()->pluck('ten_tl', 'id')->prepend(trans('global.pleaseSelect'), '');

        $giao_viens = User::whereHas('roles',function ($q) { $q->where('role_id', 2); })->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $phong_hocs = PhongHoc::all()->pluck('ten_phong', 'id')->prepend(trans('global.pleaseSelect'), '');

        $hoc_viens = User::whereHas('roles',function ($q) { $q->where('role_id', 3); })->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.lops.create', compact('mo_hocs', 'the_loais', 'giao_viens', 'phong_hocs', 'hoc_viens'));
    }

    public function store(StoreLopRequest $request)
    {
        $request->merge([
            'thu_hoc' => implode(', ', (array) $request->get('thu_hoc'))
        ]);


        $lop = Lop::create($request->all());
        $lop->hoc_viens()->sync($request->input('hoc_viens', []));

        if ($request->input('hinh_anh_lop', false)) {
            $lop->addMedia(storage_path('tmp/uploads/' . $request->input('hinh_anh_lop')))->toMediaCollection('hinh_anh_lop');
        }
        return redirect()->route('admin.lops.index');
    }

    public function edit(Lop $lop)
    {
        abort_if(Gate::denies('lop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');



        $mo_hocs = MonHoc::all()->pluck('ten_mh', 'id')->prepend(trans('global.pleaseSelect'), '');

        $the_loais = TheLoai::all()->pluck('ten_tl', 'id')->prepend(trans('global.pleaseSelect'), '');

        $giao_viens = User::whereHas('roles',function ($q) { $q->where('role_id', 2); })->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $phong_hocs = PhongHoc::all()->pluck('ten_phong', 'id')->prepend(trans('global.pleaseSelect'), '');

        $hoc_viens = User::whereHas('roles',function ($q) { $q->where('role_id', 3); })->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lop->load('mo_hoc', 'the_loai', 'giao_vien', 'phong_hoc', 'hoc_viens');

        return view('admin.lops.edit', compact('mo_hocs', 'the_loais', 'giao_viens', 'phong_hocs', 'hoc_viens', 'lop'));
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

        return redirect()->route('admin.lops.index');
    }

    public function show(Lop $lop)
    {
        abort_if(Gate::denies('lop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lop->load('mo_hoc', 'the_loai', 'giao_vien', 'phong_hoc', 'hoc_viens');

        return view('admin.lops.show', compact('lop'));
    }

    public function destroy(Lop $lop)
    {
        abort_if(Gate::denies('lop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lop->delete();

        return back();
    }

    public function massDestroy(MassDestroyLopRequest $request)
    {
        Lop::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
