@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.theLoai.title_singular') }}
                </div>
                <div class="panel-body">

                    <form method="POST" action="{{ route("admin.the-loais.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('ten_tl') ? 'has-error' : '' }}">
                            <label class="required" for="ten_tl">{{ trans('cruds.theLoai.fields.ten_tl') }}</label>
                            <input class="form-control" type="text" name="ten_tl" id="ten_tl" value="{{ old('ten_tl', '') }}" required>
                            @if($errors->has('ten_tl'))
                                <span class="help-block" role="alert">{{ $errors->first('ten_tl') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.theLoai.fields.ten_tl_helper') }}</span>
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