@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.thongBao.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.thong-baos.update", [$thongBao->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('ten_tb') ? 'has-error' : '' }}">
                            <label for="ten_tb">{{ trans('cruds.thongBao.fields.ten_tb') }}</label>
                            <input class="form-control" type="text" name="ten_tb" id="ten_tb" value="{{ old('ten_tb', $thongBao->ten_tb) }}">
                            @if($errors->has('ten_tb'))
                                <span class="help-block" role="alert">{{ $errors->first('ten_tb') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.thongBao.fields.ten_tb_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('noi_dung') ? 'has-error' : '' }}">
                            <label for="noi_dung">{{ trans('cruds.thongBao.fields.noi_dung') }}</label>
                            <textarea class="form-control" name="noi_dung" id="noi_dung">{{ old('noi_dung', $thongBao->noi_dung) }}</textarea>
                            @if($errors->has('noi_dung'))
                                <span class="help-block" role="alert">{{ $errors->first('noi_dung') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.thongBao.fields.noi_dung_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection