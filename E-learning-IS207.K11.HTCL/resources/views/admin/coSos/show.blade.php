@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.coSo.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.co-sos.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.coSo.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $coSo->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.coSo.fields.ten_cs') }}
                                    </th>
                                    <td>
                                        {{ $coSo->ten_cs }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.coSo.fields.dia_chi') }}
                                    </th>
                                    <td>
                                        {{ $coSo->dia_chi }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.co-sos.index') }}">
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