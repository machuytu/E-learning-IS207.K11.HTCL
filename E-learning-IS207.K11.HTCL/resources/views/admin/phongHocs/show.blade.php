@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.phongHoc.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.phong-hocs.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.phongHoc.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $phongHoc->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.phongHoc.fields.co_so') }}
                                    </th>
                                    <td>
                                        {{ $phongHoc->co_so->ten_cs ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.phongHoc.fields.ten_phong') }}
                                    </th>
                                    <td>
                                        {{ $phongHoc->ten_phong }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.phong-hocs.index') }}">
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