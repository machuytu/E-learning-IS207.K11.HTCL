@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.thongBao.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.thong-baos.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.thongBao.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $thongBao->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.thongBao.fields.ten_tb') }}
                                    </th>
                                    <td>
                                        {{ $thongBao->ten_tb }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.thongBao.fields.noi_dung') }}
                                    </th>
                                    <td>
                                        {{ $thongBao->noi_dung }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.thong-baos.index') }}">
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