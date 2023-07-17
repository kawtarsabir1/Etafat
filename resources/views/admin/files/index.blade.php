@extends('layouts.admin')
@section('content')
@can('file_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.files.create') }}">
                {{ trans('global.add') }} {{ trans('models.file.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('models.file.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-File">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('models.file.fields.id') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.name') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.size') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.mime_type') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.ocr_content') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.user') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.commentaire') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.associated_to') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.file') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.type') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.site') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.parent') }}
                        </th>
                        <th>
                            {{ trans('models.file.fields.archived') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $key => $file)
                        <tr data-entry-id="{{ $file->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $file->id ?? '' }}
                            </td>
                            <td>
                                {{ $file->name ?? '' }}
                            </td>
                            <td>
                                {{ $file->size ?? '' }}
                            </td>
                            <td>
                                {{ $file->mime_type ?? '' }}
                            </td>
                            <td>
                                {{ $file->ocr_content ?? '' }}
                            </td>
                            <td>
                                {{ $file->user->name ?? '' }}
                            </td>
                            <td>
                                {{ $file->commentaire ?? '' }}
                            </td>
                            <td>
                                {{ $file->associated_to ?? '' }}
                            </td>
                            <td>
                                @if($file->file)
                                    <a href="{{ $file->file->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $file->type->name ?? '' }}
                            </td>
                            <td>
                                {{ $file->site->nom ?? '' }}
                            </td>
                            <td>
                                {{ $file->parent->name ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $file->archived ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $file->archived ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('file_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.files.show', $file->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('file_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.files.edit', $file->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('file_delete')
                                    <form action="{{ route('admin.files.destroy', $file->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-File:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection