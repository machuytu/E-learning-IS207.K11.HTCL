@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.theLoai.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.the-loais.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.theLoai.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $theLoai->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.theLoai.fields.ten_tl') }}
                                    </th>
                                    <td>
                                        {{ $theLoai->ten_tl }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.theLoai.fields.loai_tl') }}
                                    </th>
                                    <td>
                                        {{ $theLoai->loai_tl }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.the-loais.index') }}">
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
