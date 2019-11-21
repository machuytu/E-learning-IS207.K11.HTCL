@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.phongHoc.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.phong-hocs.update", [$phongHoc->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('co_so_id') ? 'has-error' : '' }}">
                            <label for="co_so">{{ trans('cruds.phongHoc.fields.co_so') }}</label>
                            <select name="co_so_id" id="co_so" class="form-control select2">
                                @foreach($co_sos as $id => $co_so)
                                    <option value="{{ $id }}" {{ (isset($phongHoc) && $phongHoc->co_so ? $phongHoc->co_so->id : old('co_so_id')) == $id ? 'selected' : '' }}>{{ $co_so }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('co_so_id'))
                                <p class="help-block">
                                    {{ $errors->first('co_so_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('ten_phong') ? 'has-error' : '' }}">
                            <label for="ten_phong">{{ trans('cruds.phongHoc.fields.ten_phong') }}</label>
                            <input type="text" id="ten_phong" name="ten_phong" class="form-control" value="{{ old('ten_phong', isset($phongHoc) ? $phongHoc->ten_phong : '') }}">
                            @if($errors->has('ten_phong'))
                                <p class="help-block">
                                    {{ $errors->first('ten_phong') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.phongHoc.fields.ten_phong_helper') }}
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