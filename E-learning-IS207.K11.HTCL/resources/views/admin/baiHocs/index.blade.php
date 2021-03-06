@extends('layouts.admin')
@section('content')
<div class="content">
    @can('bai_hoc_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.bai-hocs.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.baiHoc.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.baiHoc.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-BaiHoc">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    {{-- <th>
                                        {{ trans('cruds.baiHoc.fields.id') }}
                                    </th> --}}
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.lop') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.ten_bai_hoc') }}
                                    </th>
                                    {{-- <th>
                                        {{ trans('cruds.baiHoc.fields.lien_quan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.loi_ngan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.noi_dung') }}
                                    </th> --}}
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.vi_tri_bai_hoc') }}
                                    </th>
                                    {{-- <th>
                                        {{ trans('cruds.baiHoc.fields.hinh_anh_bai_hoc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.baiHoc.fields.file') }}
                                    </th> --}}
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($baiHocs as $key => $baiHoc)
                                    <tr data-entry-id="{{ $baiHoc->id }}">
                                        <td>

                                        </td>
                                        {{-- <td>
                                            {{ $baiHoc->id ?? '' }}
                                        </td> --}}
                                        <td>
                                            {{ $baiHoc->lop->ten_lop_hoc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $baiHoc->ten_bai_hoc ?? '' }}
                                        </td>
                                        {{-- <td>
                                            {{ $baiHoc->lien_quan ?? '' }}
                                        </td>
                                        <td>
                                            {{ $baiHoc->loi_ngan ?? '' }}
                                        </td>
                                        <td>
                                            {{ $baiHoc->noi_dung ?? '' }}
                                        </td> --}}
                                        <td>
                                            {{ $baiHoc->vi_tri_bai_hoc ?? '' }}
                                        </td>
                                        {{-- <td>
                                            @foreach($baiHoc->hinh_anh_bai_hoc as $key => $media)
                                                <a href="{{ $media->getUrl() }}" target="_blank">
                                                    <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                                                </a>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($baiHoc->file as $key => $media)
                                                <a href="{{ $media->getUrl() }}" target="_blank">
                                                    {{ trans('global.view_file') }}
                                                </a>
                                            @endforeach
                                        </td> --}}
                                        <td>
                                            @can('bai_hoc_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.bai-hocs.show', $baiHoc->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('bai_hoc_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.bai-hocs.edit', $baiHoc->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('bai_hoc_delete')
                                                <form action="{{ route('admin.bai-hocs.destroy', $baiHoc->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('bai_hoc_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.bai-hocs.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-BaiHoc:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
