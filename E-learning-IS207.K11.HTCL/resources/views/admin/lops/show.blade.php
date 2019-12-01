@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.lop.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.lops.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $lop->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.ten_lop_hoc') }}
                                    </th>
                                    <td>
                                        {{ $lop->ten_lop_hoc }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.ten_link') }}
                                    </th>
                                    <td>
                                        {{ $lop->ten_link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.thgian_bd') }}
                                    </th>
                                    <td>
                                        {{ $lop->thgian_bd }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.thgian_kt') }}
                                    </th>
                                    <td>
                                        {{ $lop->thgian_kt }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.mo_hoc') }}
                                    </th>
                                    <td>
                                        {{ $lop->mo_hoc->ten_mh ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.the_loai') }}
                                    </th>
                                    <td>
                                        {{ $lop->the_loai->ten_tl ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.giao_vien') }}
                                    </th>
                                    <td>
                                        {{ $lop->giao_vien->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.phong_hoc') }}
                                    </th>
                                    <td>
                                        {{ $lop->phong_hoc->ten_phong ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.hoc_vien') }}
                                    </th>
                                    <td>
                                        @foreach($lop->hoc_viens as $key => $hoc_vien)
                                            <span class="label label-info">{{ $hoc_vien->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.gia') }}
                                    </th>
                                    <td>
                                        {{ $lop->gia }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.mo_ta') }}
                                    </th>
                                    <td>
                                        {{ $lop->mo_ta }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.hinh_anh_lop') }}
                                    </th>
                                    <td>
                                        @if($lop->hinh_anh_lop)
                                            <a href="{{ $lop->hinh_anh_lop->getUrl() }}" target="_blank">
                                                <img src="{{ $lop->hinh_anh_lop->getUrl('thumb') }}" width="50px" height="50px">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lop.fields.published') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $lop->published ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.lops.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
