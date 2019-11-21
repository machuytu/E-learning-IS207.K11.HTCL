@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.monHoc.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.mon-hocs.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.monHoc.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $monHoc->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.monHoc.fields.ten_mh') }}
                                    </th>
                                    <td>
                                        {{ $monHoc->ten_mh }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.monHoc.fields.mo_ta_mh') }}
                                    </th>
                                    <td>
                                        {{ $monHoc->mo_ta_mh }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.mon-hocs.index') }}">
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