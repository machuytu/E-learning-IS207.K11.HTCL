@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.baiHoc.title_singular') }}
                </div>
                <div class="panel-body">

                    <form method="POST" action="{{ route("admin.bai-hocs.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('lop') ? 'has-error' : '' }}">
                            <label class="required" for="lop_id">{{ trans('cruds.baiHoc.fields.lop') }}</label>
                            <select class="form-control select2" name="lop_id" id="lop_id" required>
                                @foreach($lops as $id => $lop)
                                    <option value="{{ $id }}" {{ old('lop_id') == $id ? 'selected' : '' }}>{{ $lop }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('lop_id'))
                                <span class="help-block" role="alert">{{ $errors->first('lop_id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.lop_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ten_bai_hoc') ? 'has-error' : '' }}">
                            <label class="required" for="ten_bai_hoc">{{ trans('cruds.baiHoc.fields.ten_bai_hoc') }}</label>
                            <input class="form-control" type="text" name="ten_bai_hoc" id="ten_bai_hoc" value="{{ old('ten_bai_hoc', '') }}" required>
                            @if($errors->has('ten_bai_hoc'))
                                <span class="help-block" role="alert">{{ $errors->first('ten_bai_hoc') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.ten_bai_hoc_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lien_quan') ? 'has-error' : '' }}">
                            <label for="lien_quan">{{ trans('cruds.baiHoc.fields.lien_quan') }}</label>
                            <input class="form-control" type="text" name="lien_quan" id="lien_quan" value="{{ old('lien_quan', '') }}">
                            @if($errors->has('lien_quan'))
                                <span class="help-block" role="alert">{{ $errors->first('lien_quan') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.lien_quan_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('loi_ngan') ? 'has-error' : '' }}">
                            <label for="loi_ngan">{{ trans('cruds.baiHoc.fields.loi_ngan') }}</label>
                            <input class="form-control" type="text" name="loi_ngan" id="loi_ngan" value="{{ old('loi_ngan', '') }}">
                            @if($errors->has('loi_ngan'))
                                <span class="help-block" role="alert">{{ $errors->first('loi_ngan') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.loi_ngan_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('noi_dung') ? 'has-error' : '' }}">
                            <label for="noi_dung">{{ trans('cruds.baiHoc.fields.noi_dung') }}</label>
                            <textarea class="form-control" name="noi_dung" id="noi_dung">{!! old('noi_dung') !!}</textarea>
                            @if($errors->has('noi_dung'))
                                <span class="help-block" role="alert">{{ $errors->first('noi_dung') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.noi_dung_helper') }}</span>
                        </div>
                        {{-- <div class="form-group {{ $errors->has('vi_tri_bai_hoc') ? 'has-error' : '' }}">
                            <label for="vi_tri_bai_hoc">{{ trans('cruds.baiHoc.fields.vi_tri_bai_hoc') }}</label>
                            <input class="form-control" type="number" name="vi_tri_bai_hoc" id="vi_tri_bai_hoc" value="{{ old('vi_tri_bai_hoc') }}" step="1">
                            @if($errors->has('vi_tri_bai_hoc'))
                                <span class="help-block" role="alert">{{ $errors->first('vi_tri_bai_hoc') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.vi_tri_bai_hoc_helper') }}</span>
                        </div> --}}
                        <div class="form-group {{ $errors->has('hinh_anh_bai_hoc') ? 'has-error' : '' }}">
                            <label for="hinh_anh_bai_hoc">{{ trans('cruds.baiHoc.fields.hinh_anh_bai_hoc') }}</label>
                            <div class="needsclick dropzone" id="hinh_anh_bai_hoc-dropzone">
                            </div>
                            @if($errors->has('hinh_anh_bai_hoc'))
                                <span class="help-block" role="alert">{{ $errors->first('hinh_anh_bai_hoc') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.hinh_anh_bai_hoc_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
                            <label for="file">{{ trans('cruds.baiHoc.fields.file') }}</label>
                            <div class="needsclick dropzone" id="file-dropzone">
                            </div>
                            @if($errors->has('file'))
                                <span class="help-block" role="alert">{{ $errors->first('file') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.baiHoc.fields.file_helper') }}</span>
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

@section('scripts')
<script>
    var uploadedHinhAnhBaiHocMap = {}
Dropzone.options.hinhAnhBaiHocDropzone = {
    url: '{{ route('admin.bai-hocs.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="hinh_anh_bai_hoc[]" value="' + response.name + '">')
      uploadedHinhAnhBaiHocMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedHinhAnhBaiHocMap[file.name]
      }
      $('form').find('input[name="hinh_anh_bai_hoc[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($baiHoc) && $baiHoc->hinh_anh_bai_hoc)
      var files =
        {!! json_encode($baiHoc->hinh_anh_bai_hoc) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="hinh_anh_bai_hoc[]" value="' + file.file_name + '">')
        }
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
<script>
    var uploadedFileMap = {}
Dropzone.options.fileDropzone = {
    url: '{{ route('admin.bai-hocs.storeMedia') }}',
    maxFilesize: 20, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="file[]" value="' + response.name + '">')
      uploadedFileMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedFileMap[file.name]
      }
      $('form').find('input[name="file[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($baiHoc) && $baiHoc->file)
          var files =
            {!! json_encode($baiHoc->file) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="file[]" value="' + file.file_name + '">')
            }
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
