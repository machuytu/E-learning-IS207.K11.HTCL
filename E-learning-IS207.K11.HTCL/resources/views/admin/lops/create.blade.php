@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.lop.title_singular') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <a class="btn btn-default" href="{{ route('admin.lops.index') }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

                    <form method="POST" action="{{ route("admin.lops.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                            <label class="required" for="id">{{ trans('cruds.lop.fields.id') }}</label>
                            <input class="form-control" maxlength="8" onkeyup="this.value = this.value.toUpperCase();"
                                type="text" name="id" id="id" value="{{ old('id', '') }}" required>
                            @if($errors->has('id'))
                            <span class="help-block" role="alert">{{ $errors->first('id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.id_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ten_lop_hoc') ? 'has-error' : '' }}">
                            <label class="required"
                                for="ten_lop_hoc">{{ trans('cruds.lop.fields.ten_lop_hoc') }}</label>
                            <input class="form-control" type="text" name="ten_lop_hoc" id="ten_lop_hoc"
                                value="{{ old('ten_lop_hoc', '') }}" oninput="join_names();" onpaste="join_names();"
                                required>
                            @if($errors->has('ten_lop_hoc'))
                            <span class="help-block" role="alert">{{ $errors->first('ten_lop_hoc') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.ten_lop_hoc_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ten_link') ? 'has-error' : '' }}">
                            <label class="required" for="ten_link">{{ trans('cruds.lop.fields.ten_link') }}</label>
                            <input class="form-control" type="text" name="ten_link" id="ten_link"
                                value="{{ old('ten_link', '') }}" readonly="readonly">
                            @if($errors->has('ten_link'))
                            <span class="help-block" role="alert">{{ $errors->first('ten_link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.ten_link_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('thgian_bd') ? 'has-error' : '' }}">
                            <label for="thgian_bd">{{ trans('cruds.lop.fields.thgian_bd') }}</label>
                            <input class="form-control date" type="text" name="thgian_bd" id="thgian_bd"
                                value="{{ old('thgian_bd') }}">
                            @if($errors->has('thgian_bd'))
                            <span class="help-block" role="alert">{{ $errors->first('thgian_bd') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.thgian_bd_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('thgian_kt') ? 'has-error' : '' }}">
                            <label for="thgian_kt">{{ trans('cruds.lop.fields.thgian_kt') }}</label>
                            <input class="form-control date" type="text" name="thgian_kt" id="thgian_kt"
                                value="{{ old('thgian_kt') }}">
                            @if($errors->has('thgian_kt'))
                            <span class="help-block" role="alert">{{ $errors->first('thgian_kt') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.thgian_kt_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ca_hoc') ? 'has-error' : '' }}">
                            <label for="ca_hoc">{{ trans('cruds.lop.fields.ca_hoc') }}</label>
                            <br>
                            <input type="radio" name="ca_hoc" id="ca_hoc" value="Ca Sáng (7h30 - 11h)"> Ca Sáng (7h30 - 11h)<br>
                            <input type="radio" name="ca_hoc" id="ca_hoc" value="Ca Chiều (1h00 - 3h30)"> Ca Chiều (1h00 - 3h30)<br>
                            <input type="radio" name="ca_hoc" id="ca_hoc" value="Ca Tối (6h00 - 8h30)"> Ca Tối (6h00 - 8h30)<br>
                            @if($errors->has('ca_hoc'))
                            <span class="help-block" role="alert">{{ $errors->first('ca_hoc') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.ca_hoc_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('thu_hoc') ? 'has-error' : '' }}">
                            <label for="thu_hoc">{{ trans('cruds.lop.fields.thu_hoc') }}</label>
                            <br>
                            <fieldset>
                                    <input type="checkbox" name="thu_hoc[]" id="thu_hoc" value="Thứ 2">Thứ 2<br>
                                    <input type="checkbox" name="thu_hoc[]" id="thu_hoc" value="Thứ 3">Thứ 3<br>
                                    <input type="checkbox" name="thu_hoc[]" id="thu_hoc" value="Thứ 4">Thứ 4<br>
                                    <input type="checkbox" name="thu_hoc[]" id="thu_hoc" value="Thứ 5">Thứ 5<br>
                                    <input type="checkbox" name="thu_hoc[]" id="thu_hoc" value="Thứ 6">Thứ 6<br>
                                    <input type="checkbox" name="thu_hoc[]" id="thu_hoc" value="Thứ 7">Thứ 7<br>
                                    <br>
                            </fieldset>
                            @if($errors->has('thu_hoc'))
                            <span class="help-block" role="alert">{{ $errors->first('thu_hoc') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.thu_hoc_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mo_hoc') ? 'has-error' : '' }}">
                            <label class="required" for="mo_hoc_id">{{ trans('cruds.lop.fields.mo_hoc') }}</label>
                            <select class="form-control select2" name="mo_hoc_id" id="mo_hoc_id" required>
                                @foreach($mo_hocs as $id => $mo_hoc)
                                <option value="{{ $id }}" {{ old('mo_hoc_id') == $id ? 'selected' : '' }}>{{ $mo_hoc }}
                                </option>
                                @endforeach
                            </select>
                            @if($errors->has('mo_hoc_id'))
                            <span class="help-block" role="alert">{{ $errors->first('mo_hoc_id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.mo_hoc_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('the_loai') ? 'has-error' : '' }}">
                            <label class="required" for="the_loai_id">{{ trans('cruds.lop.fields.the_loai') }}</label>
                            <select class="form-control select2" name="the_loai_id" id="the_loai_id" required>
                                @foreach($the_loais as $id => $the_loai)
                                <option value="{{ $id }}" {{ old('the_loai_id') == $id ? 'selected' : '' }}>
                                    {{ $the_loai }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('the_loai_id'))
                            <span class="help-block" role="alert">{{ $errors->first('the_loai_id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.the_loai_helper') }}</span>
                        </div>
                        @if (Auth::user()->isAdmin())
                        <div class="form-group {{ $errors->has('giao_vien') ? 'has-error' : '' }}">
                            <label class="required" for="giao_vien_id">{{ trans('cruds.lop.fields.giao_vien') }}</label>
                            <select class="form-control select2" name="giao_vien_id" id="giao_vien_id" required>
                                @foreach($giao_viens as $id => $giao_vien)
                                <option value="{{ $id }}" {{ old('giao_vien_id') == $id ? 'selected' : '' }}>
                                    {{ $giao_vien }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('giao_vien_id'))
                            <span class="help-block" role="alert">{{ $errors->first('giao_vien_id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.giao_vien_helper') }}</span>
                        </div>
                        @endif
                        <div class="form-group {{ $errors->has('phong_hoc') ? 'has-error' : '' }}">
                            <label class="required" for="phong_hoc_id">{{ trans('cruds.lop.fields.phong_hoc') }}</label>
                            <select class="form-control select2" name="phong_hoc_id" id="phong_hoc_id" required>
                                @foreach($phong_hocs as $id => $phong_hoc)
                                <option value="{{ $id }}" {{ old('phong_hoc_id') == $id ? 'selected' : '' }}>
                                    {{ $phong_hoc }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('phong_hoc_id'))
                            <span class="help-block" role="alert">{{ $errors->first('phong_hoc_id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.phong_hoc_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('hoc_viens') ? 'has-error' : '' }}">
                            <label for="hoc_viens">{{ trans('cruds.lop.fields.hoc_vien') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all"
                                    style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all"
                                    style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="hoc_viens[]" id="hoc_viens" multiple>
                                @foreach($hoc_viens as $id => $hoc_vien)
                                    @if ($id)
                                        <option value="{{ $id }}" {{ in_array($id, old('hoc_viens', [])) ? 'selected' : '' }}>
                                            {{ $id." - ".$hoc_vien }}</option>
                                    @else
                                        <option value="{{ $id }}" {{ in_array($id, old('hoc_viens', [])) ? 'selected' : '' }}>
                                            {{ $hoc_vien }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if($errors->has('hoc_viens'))
                            <span class="help-block" role="alert">{{ $errors->first('hoc_viens') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.hoc_vien_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('gia') ? 'has-error' : '' }}">
                            <label for="gia">{{ trans('cruds.lop.fields.gia') }}</label>
                            <input class="form-control" type="number" name="gia" id="gia" value="{{ old('gia') }}"
                                step="0.01">
                            @if($errors->has('gia'))
                            <span class="help-block" role="alert">{{ $errors->first('gia') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.gia_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('mo_ta') ? 'has-error' : '' }}">
                            <label for="mo_ta">{{ trans('cruds.lop.fields.mo_ta') }}</label>
                            <textarea class="form-control" name="mo_ta" id="mo_ta">{!! old('mo_ta') !!}</textarea>
                            @if($errors->has('mo_ta'))
                            <span class="help-block" role="alert">{{ $errors->first('mo_ta') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.mo_ta_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('hinh_anh_lop') ? 'has-error' : '' }}">
                            <label for="hinh_anh_lop">{{ trans('cruds.lop.fields.hinh_anh_lop') }}</label>
                            <div class="needsclick dropzone" id="hinh_anh_lop-dropzone">
                            </div>
                            @if($errors->has('hinh_anh_lop'))
                            <span class="help-block" role="alert">{{ $errors->first('hinh_anh_lop') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.hinh_anh_lop_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('published') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="published" value="0">
                                <input type="checkbox" name="published" id="published" value="1"
                                    {{ old('published', 0) == 1 ? 'checked' : '' }}>
                                <label for="published"
                                    style="font-weight: 400">{{ trans('cruds.lop.fields.published') }}</label>
                            </div>
                            @if($errors->has('published'))
                            <span class="help-block" role="alert">{{ $errors->first('published') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lop.fields.published_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit" onclick="join_names()">
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

@section('scripts')
<script>
    function convertToSlug(Text)
    {
        return Text
            .toLowerCase()
            .replace(/ /g,'-')
            .replace(/[^\w-]+/g,'')
            ;
    }
    function join_names() {
        var input_name_first = document.getElementsByName('ten_lop_hoc')[0].value;
        var input_name_full = document.getElementsByName('ten_link')[0];
        var var_name_full = input_name_first;
        input_name_full.value = convertToSlug(var_name_full);
    }

    Dropzone.options.hinhAnhLopDropzone = {
    url: '{{ route('admin.lops.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="hinh_anh_lop"]').remove()
      $('form').append('<input type="hidden" name="hinh_anh_lop" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="hinh_anh_lop"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
    @if(isset($lop) && $lop->hinh_anh_lop)
      var file = {!! json_encode($lop->hinh_anh_lop) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $lop->hinh_anh_lop->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="hinh_anh_lop" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
    @endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection
