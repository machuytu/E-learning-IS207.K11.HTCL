@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.baiHoc.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.bai-hocs.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $baiHoc->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.lop') }}
                                    </th>
                                    <td>
                                        {{ $baiHoc->lop->ten_lop_hoc ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.ten_bai_hoc') }}
                                    </th>
                                    <td>
                                        {{ $baiHoc->ten_bai_hoc }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.lien_quan') }}
                                    </th>
                                    <td>
                                        {{ $baiHoc->lien_quan }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.loi_ngan') }}
                                    </th>
                                    <td>
                                        {{ $baiHoc->loi_ngan }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.noi_dung') }}
                                    </th>
                                    <td>
                                        {{ $baiHoc->noi_dung }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.vi_tri_bai_hoc') }}
                                    </th>
                                    <td>
                                        {{ $baiHoc->vi_tri_bai_hoc }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.hinh_anh_bai_hoc') }}
                                    </th>
                                    <td>
                                        @foreach($baiHoc->hinh_anh_bai_hoc as $key => $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank">
                                                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                                            </a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.file') }}
                                    </th>
                                    <td>
                                        @foreach($baiHoc->file as $key => $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.bai-hocs.index') }}">
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