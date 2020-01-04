@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.coSo.title_singular') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <a class="btn btn-default" href="{{ route('admin.co-sos.index') }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

                    <form method="POST" action="{{ route("admin.co-sos.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('ten_cs') ? 'has-error' : '' }}">
                            <label class="required" for="ten_cs">{{ trans('cruds.coSo.fields.ten_cs') }}</label>
                            <input class="form-control" type="text" name="ten_cs" id="ten_cs" value="{{ old('ten_cs', '') }}" required>
                            @if($errors->has('ten_cs'))
                                <span class="help-block" role="alert">{{ $errors->first('ten_cs') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.coSo.fields.ten_cs_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('dia_chi') ? 'has-error' : '' }}">
                            <label for="dia_chi">{{ trans('cruds.coSo.fields.dia_chi') }}</label>
                            <input class="form-control" type="text" name="dia_chi" id="dia_chi" value="{{ old('dia_chi', '') }}">
                            @if($errors->has('dia_chi'))
                                <span class="help-block" role="alert">{{ $errors->first('dia_chi') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.coSo.fields.dia_chi_helper') }}</span>
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
