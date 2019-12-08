@extends('layouts.admin')
@section('content')
<div class="content">
    @can('lop_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.lops.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.lop.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.lop.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Lop">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.ten_lop_hoc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.ten_link') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.thgian_bd') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.thgian_kt') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.mo_hoc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.the_loai') }}
                                    </th>
                                    @if(Auth::user()->isAdmin())
                                        <th>
                                            {{ trans('cruds.lop.fields.giao_vien') }}
                                        </th>
                                    @endif
                                    <th>
                                        {{ trans('cruds.lop.fields.phong_hoc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.hoc_vien') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.gia') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.hinh_anh_lop') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lop.fields.published') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lops as $key => $lop)
                                    <tr data-entry-id="{{ $lop->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $lop->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lop->ten_lop_hoc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lop->ten_link ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lop->thgian_bd ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lop->thgian_kt ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lop->mo_hoc->ten_mh ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lop->the_loai->ten_tl ?? '' }}
                                        </td>
                                        @if(Auth::user()->isAdmin())
                                            <td>
                                                {{ $lop->giao_vien->name ?? '' }}
                                            </td>
                                        @endif
                                        <td>
                                            {{ $lop->phong_hoc->ten_phong ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($lop->hoc_viens as $key => $item)
                                                <span class="label label-info label-many">{{ $item->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $lop->gia ?? '' }}
                                        </td>
                                        <td>
                                            @if($lop->hinh_anh_lop)
                                                <a href="{{ asset($lop->hinh_anh_lop->getUrl()) }}" target="_blank">
                                                    <img src="{{ $lop->hinh_anh_lop->getUrl('thumb') }}" width="50px" height="50px">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $lop->published ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $lop->published ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            @can('lop_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.bai-hocs.index', ['lop_id' => $lop->id]) }}">
                                                    {{ trans('Lesson') }}
                                                </a>
                                                {{-- <a class="btn btn-xs btn-primary" href="{{ route('admin.lops.show', $lop->id) }}">
                                                    {{ trans('global.view') }}
                                                </a> --}}
                                            @endcan

                                            @can('lop_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.lops.edit', $lop->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('lop_delete')
                                                <form action="{{ route('admin.lops.destroy', $lop->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('lop_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.lops.massDestroy') }}",
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
  $('.datatable-Lop:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
