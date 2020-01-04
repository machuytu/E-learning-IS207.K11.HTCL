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
                    <div class="form-group">
                        <a class="btn btn-default" href="{{ route('admin.the-loais.index') }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

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
                        <div class="form-group {{ $errors->has('loai_tl') ? 'has-error' : '' }}">
                            <label class="required" for="loai_tl">{{ trans('cruds.theLoai.fields.loai_tl') }}</label>
                            <br>
                            {{-- <input class="form-control" type="text" name="loai_tl" id="loai_tl" value="{{ old('loai_tl', '') }}" required> --}}
                                <input type="radio" name="loai_tl" id="loai_tl" value="Lập trình"> Lập trình<br>
                                <input type="radio" name="loai_tl" id="loai_tl" value="Ngoại ngữ"> Ngoại ngữ<br>
                                <input type="radio" name="loai_tl" id="loai_tl" value="Kỹ năng sống"> Kỹ năng sống<br>
                                <input type="radio" name="loai_tl" id="loai_tl" value="Đồ họa"> Đồ họa<br>
                            @if($errors->has('loai_tl'))
                                <span class="help-block" role="alert">{{ $errors->first('loai_tl') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.theLoai.fields.loai_tl_helper') }}</span>
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
