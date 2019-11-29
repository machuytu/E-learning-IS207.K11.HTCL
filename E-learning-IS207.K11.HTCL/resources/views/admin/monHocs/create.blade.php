@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.monHoc.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.mon-hocs.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('ma_mh') ? 'has-error' : '' }}">
                            <label for="ma_mh">{{ trans('cruds.monHoc.fields.ma_mh') }}</label>
                            <input type="text" id="ma_mh" name="ma_mh" class="form-control"
                                maxlength="5" onkeyup="this.value = this.value.toUpperCase();"
                                value="{{ old('ma_mh', isset($monHoc) ? $monHoc->ma_mh : '') }}">
                            @if($errors->has('ma_mh'))
                                <p class="help-block">
                                    {{ $errors->first('ma_mh') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.monHoc.fields.ma_mh_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('ten_mh') ? 'has-error' : '' }}">
                            <label for="ten_mh">{{ trans('cruds.monHoc.fields.ten_mh') }}</label>
                            <input type="text" id="ten_mh" name="ten_mh" class="form-control" value="{{ old('ten_mh', isset($monHoc) ? $monHoc->ten_mh : '') }}">
                            @if($errors->has('ten_mh'))
                                <p class="help-block">
                                    {{ $errors->first('ten_mh') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.monHoc.fields.ten_mh_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('mo_ta_mh') ? 'has-error' : '' }}">
                            <label for="mo_ta_mh">{{ trans('cruds.monHoc.fields.mo_ta_mh') }}</label>
                            <input type="text" id="mo_ta_mh" name="mo_ta_mh" class="form-control" value="{{ old('mo_ta_mh', isset($monHoc) ? $monHoc->mo_ta_mh : '') }}">
                            @if($errors->has('mo_ta_mh'))
                                <p class="help-block">
                                    {{ $errors->first('mo_ta_mh') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.monHoc.fields.mo_ta_mh_helper') }}
                            </p>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
